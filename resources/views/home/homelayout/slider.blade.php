@php  
    $sliders = \App\Models\Slider::all(); 
@endphp

<div id="sliderCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="background-color: #0e2a47;">
    <!-- Carousel Inner -->
    <div class="carousel-inner">
        @foreach($sliders as $index => $slider)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="height: 600px; background-image: url('{{ asset($slider->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-6 col-12" style="text-align: left;">
                            <h2 id="slider-title-{{ $slider->id }}" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $slider->id }}" class="fw-semibold text-capitalize lh-base" style="font-family: Lato, sans-serif; font-size: clamp(24px, 4vw, 40px); font-weight: 700; color: white;">
                                {{ $slider->title }}
                            </h2>
                            <p id="slider-description-{{ $slider->id }}" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $slider->id }}" class="fs-18 mb-4" style="color: white; font-size: clamp(14px, 2vw, 18px); line-height: clamp(24px, 3vw, 28px); font-family: Poppins, sans-serif;">
                                {{ $slider->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Indicators -->
    <style>
        .carousel-indicators button {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50% !important;
            margin: 0 5px !important;
        }
    </style>
    <div class="carousel-indicators">
        @foreach($sliders as $index => $slider)
            <button type="button" data-bs-target="#sliderCarousel" data-bs-slide-to="{{ $index }}" 
                    class="{{ $index === 0 ? 'active' : '' }}" 
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                    aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
</div>

{{--csrf token--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap carousel for auto-rotation
        var carouselElement = document.getElementById('sliderCarousel');
        if (carouselElement && typeof bootstrap !== 'undefined') {
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: 5000,
                ride: 'carousel',
                wrap: true
            });
        }

        // Get all editable elements
        const editableElements = document.querySelectorAll('[contenteditable="true"]');
        
        function saveChanges(element) {
            let sliderId = element.dataset.id;
            let elementId = element.id;
            let field = elementId.includes('title') ? 'title' : 'description';
            let newValue = element.innerText.trim();

            fetch(`/change-slider/${sliderId}`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({[field]: newValue})
            })
            .then(response => response.json())
            .then(data => {
                if(data.success){
                    console.log(`${field} updated successfully for slider ${sliderId}`);
                }
            })
            .catch(error => console.error("Error: ", error));
        }

        // Add event listeners to all editable elements
        editableElements.forEach(element => {
            // Auto save on Enter key
            element.addEventListener('keydown', function(e) {
                if(e.key === 'Enter') {
                    e.preventDefault();
                    saveChanges(e.target);
                }
            });
            
            // Auto save on losing focus
            element.addEventListener('blur', function() {
                saveChanges(element);
            });
        });
    });
</script>