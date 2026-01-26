<section class="lonyo-section-padding2 position-relative" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="color: #99CC33; font-weight: 800; font-size: 20px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 10px; font-family: 'Outfit', sans-serif;">TESTIMONIALS</h2>
                <h3 style="font-weight: 800; font-size: clamp(32px, 5vw, 45px); color: #004161; letter-spacing: -1px; font-family: 'Outfit', sans-serif;">What Our Clients Say</h3>
            </div>
        </div>

        <div class="row testimonial-slider">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 px-3">
                <div class="testimonial-item p-4" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid #99CC33;">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/10/MOLSA.jpeg" alt="MOLSA" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h5 style="margin: 0; color: #004161; font-weight: 700;">MOLSA</h5>
                            <small style="color: #99CC33; font-weight: 600;">Government Agency</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px;">"The custom PFM system by Horntech Ltd greatly improved our management efficiency"</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 px-3">
                <div class="testimonial-item p-4" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid #004161;">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/11/logo-muriidi.jpg" alt="Muriidi" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h5 style="margin: 0; color: #004161; font-weight: 700;">Muriidi</h5>
                            <small style="color: #99CC33; font-weight: 600;">Notary Services</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px;">"Horntech Ltd created a reliable notary system tailored to our needs. Your service were outstanding."</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 px-3">
                <div class="testimonial-item p-4" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid #99CC33;">
                    <div class="client-info d-flex align-items-center mb-4">
                        <div class="client-img mr-3" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid #f0f0f0;">
                            <img src="https://thehorntech.com/wp-content/uploads/2024/10/apple-touch-icon.png" alt="ICT Client" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h5 style="margin: 0; color: #004161; font-weight: 700;">Horntech Client</h5>
                            <small style="color: #99CC33; font-weight: 600;">Tech Partner</small>
                        </div>
                    </div>
                    <div class="quote-content position-relative">
                        <i class="fas fa-quote-left" style="color: #99CC33; font-size: 24px; opacity: 0.2; position: absolute; top: -10px; left: -5px;"></i>
                        <p style="color: #555; font-style: italic; line-height: 1.7; margin-bottom: 0; padding-left: 15px;">"Horntech ! provided exactly what we needed, efficiently and professionally. Highly recommended website"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .testimonial-item:hover {
        transform: translateY(-10px);
        background: #004161 !important;
    }
    .testimonial-item:hover h5,
    .testimonial-item:hover p {
        color: #ffffff !important;
    }
    .testimonial-item:hover .quote-content i {
        opacity: 0.6 !important;
    }
    .testimonial-slider .slick-dots {
        bottom: -40px;
    /* Styles for native JS slider dots */
    .testimonial-slider-dots {
        text-align: center;
        margin-top: 30px;
    }
    .testimonial-slider-dots .dot {
        height: 12px;
        width: 12px;
        margin: 0 5px;
        background-color: #99CC33;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .testimonial-slider-dots .dot.active {
        background-color: #004161;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderContainer = document.querySelector('.testimonial-slider');
        if (!sliderContainer) return;

        const testimonialItems = sliderContainer.querySelectorAll('.testimonial-item');
        if (testimonialItems.length === 0) return;

        let currentIndex = 0;
        const itemsPerPage = getItemsPerPage();
        let autoplayInterval;

        // Create a wrapper for the items to enable horizontal scrolling
        const wrapper = document.createElement('div');
        wrapper.style.display = 'flex';
        wrapper.style.overflow = 'hidden';
        wrapper.style.scrollBehavior = 'smooth';
        wrapper.style.width = '100%';

        // Move existing items into the wrapper
        testimonialItems.forEach(item => {
            wrapper.appendChild(item);
        });
        sliderContainer.appendChild(wrapper);

        // Add dots container
        const dotsContainer = document.createElement('div');
        dotsContainer.classList.add('testimonial-slider-dots');
        sliderContainer.parentNode.insertBefore(dotsContainer, sliderContainer.nextSibling);

        function getItemsPerPage() {
            if (window.innerWidth <= 768) {
                return 1;
            } else if (window.innerWidth <= 1024) {
                return 2;
            } else {
                return 3;
            }
        }

        function updateItemVisibility() {
            const currentItemsPerPage = getItemsPerPage();
            const totalPages = Math.ceil(testimonialItems.length / currentItemsPerPage);

            testimonialItems.forEach((item, index) => {
                item.style.flexShrink = '0';
                item.style.width = `${100 / currentItemsPerPage}%`;
                item.style.display = 'block'; // Ensure all items are displayed
            });

            // Adjust wrapper scroll position
            const scrollPosition = currentIndex * (wrapper.offsetWidth / currentItemsPerPage);
            wrapper.scrollLeft = scrollPosition;

            updateDots();
        }

        function createDots() {
            dotsContainer.innerHTML = '';
            const currentItemsPerPage = getItemsPerPage();
            const totalPages = Math.ceil(testimonialItems.length / currentItemsPerPage);

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
            currentIndex = (currentIndex + 1) % totalPages;
            updateItemVisibility();
        }

        function startAutoplay() {
            autoplayInterval = setInterval(showNext, 4000);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        function resetAutoplay() {
            stopAutoplay();
            startAutoplay();
        }

        // Initial setup
        createDots();
        updateItemVisibility();
        startAutoplay();

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                createDots(); // Recreate dots based on new itemsPerPage
                updateItemVisibility();
                resetAutoplay();
            }, 200);
        });

        // Pause autoplay on hover
        sliderContainer.addEventListener('mouseenter', stopAutoplay);
        sliderContainer.addEventListener('mouseleave', startAutoplay);
    });
</script>
