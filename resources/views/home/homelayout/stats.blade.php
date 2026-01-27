<style>
    .stats-section {
        background-color: #004161;
        background-image: linear-gradient(135deg, rgba(0, 65, 97, 0.95), rgba(0, 30, 45, 0.95));
        padding: 80px 0;
        margin-bottom: 50px;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }
    .stats-section:hover {
        background-color: #99CC33;
        background-image: none;
    }
    .stat-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        transition: transform 0.4s ease;
    }
    /* White Hover Colors for Icons and Text */
    .stats-section:hover .stat-icon i,
    .stats-section:hover .stat-number,
    .stats-section:hover .stat-number span,
    .stats-section:hover .stat-plus,
    .stats-section:hover .stat-label {
        color: #ffffff !important;
    }
    .stats-section:hover .stat-divider {
        background-color: rgba(255, 255, 255, 0.3);
    }
    .stat-item:hover {
        transform: translateY(-10px);
    }
    .stat-icon {
        font-size: 50px;
        color: #99CC33; /* Brand Green */
        flex-shrink: 0;
        opacity: 0.9;
        transition: color 0.4s ease;
    }
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    .stat-number {
        font-size: 40px;
        font-weight: 700;
        line-height: 1.1;
        color: #99CC33; /* Brand Green highlighting the numbers */
        display: flex;
        align-items: flex-end;
        transition: color 0.4s ease;
    }
    .stat-plus {
        font-size: 24px;
        margin-left: 2px;
        margin-bottom: 6px;
    }
    .stat-label {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0.5px;
        color: #e2e8f0;
        transition: color 0.4s ease;
    }
    .stat-divider {
        width: 1px;
        min-height: 70px;
        background-color: rgba(255, 255, 255, 0.15);
        margin: 0 10px;
    }
    @media (max-width: 991px) {
        .stat-divider { display: none; }
        .row { justify-content: center !important; }
        .stat-item { 
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-bottom: 40px;
        }
        .stat-icon {
            margin-bottom: 15px;
            font-size: 45px;
        }
        .stat-number {
            justify-content: center;
            font-size: 35px;
        }
        .stat-content {
            align-items: center;
        }
    }
    @media (max-width: 767px) {
         .stat-number {
            font-size: 32px;
        }
        .stat-icon {
            font-size: 40px;
        }
    }
</style>

<section class="stats-section">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">
            
            <!-- Happy Clients -->
            <div class="col-lg-auto col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">
                            <span class="counter" data-target="1700">0</span>
                            <span class="stat-plus">+</span>
                        </div>
                        <span class="stat-label">Happy Clients</span>
                    </div>
                </div>
            </div>

            <div class="stat-divider d-none d-lg-block"></div>

            <!-- Projects Completed -->
            <div class="col-lg-auto col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">
                            <span class="counter" data-target="2300">0</span>
                            <span class="stat-plus">+</span>
                        </div>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                </div>
            </div>

            <div class="stat-divider d-none d-lg-block"></div>

            <!-- Professional Staff -->
            <div class="col-lg-auto col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">
                            <span class="counter" data-target="700">0</span>
                            <span class="stat-plus">+</span>
                        </div>
                        <span class="stat-label">Professional Staff</span>
                    </div>
                </div>
            </div>

            <div class="stat-divider d-none d-lg-block"></div>

            <!-- Year Experienced -->
            <div class="col-lg-auto col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">
                            <span class="counter" data-target="15">0</span>
                            <span class="stat-plus">+</span>
                        </div>
                        <span class="stat-label">Year Experienced</span>
                    </div>
                </div>
            </div>

            <div class="stat-divider d-none d-lg-block"></div>

            <!-- Countries -->
            <div class="col-lg-auto col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">
                            <span class="counter" data-target="7">0</span>
                            <span class="stat-plus">+</span>
                        </div>
                        <span class="stat-label">Countries</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // The lower the slower

    const startCounter = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText.replace(/,/g, '');
                    
                    // Lower increment for smoother animation
                    const inc = target / speed;

                    if (count < target) {
                        const nextCount = Math.ceil(count + inc);
                        // Format with commas
                        counter.innerText = nextCount >= target ? target.toLocaleString() : nextCount.toLocaleString();
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                updateCount();
                observer.unobserve(counter);
            }
        });
    };

    const observerOptions = {
        threshold: 0.5
    };

    const counterObserver = new IntersectionObserver(startCounter, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
});
</script>
