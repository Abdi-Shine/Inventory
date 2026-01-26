<style>
    .domain-search-section {
        padding: 80px 0;
        background-color: #004161 !important;
        margin-top: -60px;
        transition: background-color 0.4s ease;
    }
    .domain-search-section:hover {
        background-color: #99CC33 !important;
    }
    .domain-search-section .title {
        color: #fff;
        font-size: 36px;
        margin-bottom: 15px;
        transition: color 0.4s ease;
    }
    .domain-search-section:hover .title {
        color: #004161;
    }
    .domain-search-section .subtitle {
        color: #e2e8f0;
        font-size: 18px;
        margin-bottom: 40px;
        transition: color 0.4s ease;
    }
    .domain-search-section:hover .subtitle {
        color: #004161;
    }
    .search-container {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 50px;
        padding: 8px 8px 8px 25px;
        box-shadow: 0 10px 30px rgba(0, 65, 97, 0.1);
        transition: transform 0.3s ease;
    }
    .domain-search-section:hover .search-container {
        transform: translateY(-5px);
    }
    .search-icon {
        color: #004161;
        font-size: 20px;
        margin-right: 15px;
        display: flex;
        align-items: center;
    }
    .search-input {
        border: none !important;
        box-shadow: none !important;
        font-size: 18px;
        color: #004161;
        width: 100%;
        background: transparent;
        padding: 10px 0;
    }
    .search-input::placeholder {
        color: #a0aec0;
    }
    .search-button {
        background-color: #99CC33;
        color: #fff;
        border: none;
        border-radius: 40px;
        padding: 12px 35px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .domain-search-section:hover .search-button {
        background-color: #004161;
        color: #fff;
    }
    .search-button:hover {
        background-color: #fff !important;
        color: #004161 !important;
        transform: scale(1.05);
    }
</style>

<section class="spacing-borders domain-search-section">
  <div class="container">
    <div class="justify-content-center text-center mb-4 row">
      <div class="col-xl-8 col-lg-12">
        <h2 class="fw-bold title">Your domain defines who you are!</h2>
        <p class="subtitle">Discover a simple, memorable domain that fits your business perfectly.<br>Our experts are here to support you fully.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="search-container">
          <div class="search-icon">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
          </div>
          <input placeholder="Find your ideal domain name here!" type="text" class="search-input form-control">
          <button type="button" class="search-button">Search</button>
        </div>
      </div>
    </div>
  </div>
</section>
