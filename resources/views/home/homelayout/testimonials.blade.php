<style>
    .testimonials-section {
        background: #f8f9fa;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }
    @media (max-width: 991px) {
        .testimonials-section {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
    }
    @media (max-width: 767px) {
        .testimonials-section {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }
    }

    .testimonials-section .lonyo-section-title {
        margin-bottom: 20px !important;
    }

    .testimonial-item {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        height: 100%;
        transition: all 0.3s ease;
        border-bottom: 4px solid #99CC33;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .testimonial-item:hover {
        transform: translateY(-10px);
        background: #004161 !important;
        border-bottom-color: #004161;
    }
    .testimonial-item:hover h5,
    .testimonial-item:hover p,
    .testimonial-item:hover small {
        color: #ffffff !important;
    }
    .testimonial-item:hover .quote-content i {
        opacity: 0.6 !important;
        color: #fff !important;
    }

    .testimonial-slider-dots {
        text-align: center;
        margin-top: 30px;
    }
    .testimonial-slider-dots .dot {
        height: 12px;
        width: 12px;
        margin: 0 6px;
        background-color: #cbd5e0;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .testimonial-slider-dots .dot.active {
        background-color: #004161;
        width: 30px;
        border-radius: 6px;
    }

    @media (max-width: 767px) {
        .lonyo-section-title h2 {
            font-size: 32px !important;
            margin-bottom: 10px;
        }
        .testimonial-item {
            padding: 30px 20px !important;
        }
        .testimonial-item p {
            font-size: 15px !important;
            line-height: 1.6;
        }
        .client-img {
            width: 60px !important;
            height: 60px !important;
        }
    }
</style>

<section class="testimonials-section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="lonyo-section-title center">
              <h2>Testimonials</h2>
              <p>What Our Clients Say</p>
          </div>
        </div>

        <div class="row testimonial-slider">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 px-2 px-md-3 testimonial-wrapper-col">
                <div class="testimonial-item">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0; flex-shrink: 0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/10/MOLSA.jpeg" alt="MOLSA" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 style="margin: 0; color: #004161; font-weight: 700; transition: color 0.3s ease;">MOLSA</h5>
                            <small style="color: #99CC33; font-weight: 600; transition: color 0.3s ease;">Government Agency</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px; transition: color 0.3s ease;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px; transition: color 0.3s ease;">"The custom PFM system by Horntech Ltd greatly improved our management efficiency"</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 px-2 px-md-3 testimonial-wrapper-col">
                <div class="testimonial-item" style="border-bottom-color: #004161;">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0; flex-shrink: 0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/11/logo-muriidi.jpg" alt="Muriidi" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 style="margin: 0; color: #004161; font-weight: 700; transition: color 0.3s ease;">Muriidi</h5>
                            <small style="color: #99CC33; font-weight: 600; transition: color 0.3s ease;">Notary Services</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px; transition: color 0.3s ease;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px; transition: color 0.3s ease;">"Horntech Ltd created a reliable notary system tailored to our needs. Your service were outstanding."</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 px-2 px-md-3 testimonial-wrapper-col">
                <div class="testimonial-item">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0; flex-shrink: 0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/10/apple-touch-icon.png" alt="ICT Client" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 style="margin: 0; color: #004161; font-weight: 700; transition: color 0.3s ease;">Horntech Client</h5>
                            <small style="color: #99CC33; font-weight: 600; transition: color 0.3s ease;">Tech Partner</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px; transition: color 0.3s ease;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px; transition: color 0.3s ease;">"Horntech ! provided exactly what we needed, efficiently and professionally. Highly recommended website"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderContainer = document.querySelector('.testimonial-slider');
        if (!sliderContainer) return;

        const testimonialItems = sliderContainer.querySelectorAll('.testimonial-wrapper-col');
        if (testimonialItems.length === 0) return;

        let currentIndex = 0;
        let autoplayInterval;

        // Create a wrapper for the items to enable horizontal scrolling
        const wrapper = document.createElement('div');
        wrapper.classList.add('testimonial-slider-inner');
        wrapper.style.display = 'flex';
        wrapper.style.overflow = 'hidden';
        wrapper.style.scrollBehavior = 'smooth';
        wrapper.style.width = '100.2%'; // Slight offset to prevent sub-pixel gaps
        wrapper.style.margin = '0 -10px'; // Offset column padding

        // Move existing items into the wrapper
        testimonialItems.forEach(item => {
            wrapper.appendChild(item);
        });
        
        // Clear container and add wrapper
        sliderContainer.innerHTML = '';
        sliderContainer.appendChild(wrapper);

        // Add dots container
        const dotsContainer = document.createElement('div');
        dotsContainer.classList.add('testimonial-slider-dots');
        sliderContainer.parentNode.insertBefore(dotsContainer, sliderContainer.nextSibling);

        function getItemsPerPage() {
            if (window.innerWidth < 768) return 1;
            if (window.innerWidth < 1100) return 2;
            return 3;
        }

        function updateItemVisibility() {
            const currentItemsPerPage = getItemsPerPage();
            const containerWidth = wrapper.offsetWidth;
            const itemWidth = containerWidth / currentItemsPerPage;

            testimonialItems.forEach((item) => {
                item.style.flex = `0 0 ${itemWidth}px`;
                item.style.maxWidth = `${itemWidth}px`;
            });

            const scrollPosition = currentIndex * itemWidth;
            wrapper.scrollLeft = scrollPosition;

            updateDots();
        }

        function createDots() {
            dotsContainer.innerHTML = '';
            const currentItemsPerPage = getItemsPerPage();
            const totalPages = Math.ceil(testimonialItems.length / currentItemsPerPage);

            if (totalPages <= 1) return;

            for (let i = 0; i < totalPages; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                dot.dataset.index = i;
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateItemVisibility();
                    resetAutoplay();
                });
                dotsContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function showNext() {
            const currentItemsPerPage = getItemsPerPage();
            const totalPages = Math.ceil(testimonialItems.length / currentItemsPerPage);
            if (totalPages <= 1) return;
            currentIndex = (currentIndex + 1) % totalPages;
            updateItemVisibility();
        }

        function startAutoplay() {
            if (autoplayInterval) clearInterval(autoplayInterval);
            autoplayInterval = setInterval(showNext, 5000);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        function resetAutoplay() {
            stopAutoplay();
            startAutoplay();
        }

        // Initial setup
        setTimeout(() => {
            createDots();
            updateItemVisibility();
            startAutoplay();
        }, 100);

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                createDots();
                updateItemVisibility();
                resetAutoplay();
            }, 250);
        });

        // Pause autoplay on hover
        sliderContainer.addEventListener('mouseenter', stopAutoplay);
        sliderContainer.addEventListener('mouseleave', startAutoplay);
    });
</script>

