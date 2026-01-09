<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Quality BBQ Charcoal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpg') }}" alt="ADS Logo" style="height: 50px;">
                <span class="ms-3 fw-bold" style="font-size: 2rem; color: #333; letter-spacing: -0.5px;">
                    - ARAH DAYA SEJAHTERA, PT
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-get-quote ms-lg-3" href="#contact">Get Quote</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <img src="{{ asset('images/charcoal.jpg') }}" class="d-block w-100 hero-img" alt="BBQ Charcoal 1">
                    <div class="carousel-caption text-start">
                        <h1 class="display-3">Export Quality BBQ Charcoal</h1>
                        <p>High-quality charcoal products for worldwide markets</p>
                        <div class="d-flex">
                            <a href="https://wa.me/628973377577" class="btn btn-contact" target="_blank">Contact Us</a>
                            <a href="#products" class="btn btn-products">Our Products</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/charcoal2.jpg') }}" class="d-block w-100 hero-img" alt="BBQ Charcoal 2">
                    <div class="carousel-caption text-start">
                        <h1 class="display-3">Premium Coconut Charcoal</h1>
                        <p>Best quality briquettes for professional grilling.</p>
                        <div class="d-flex">
                            <a href="https://wa.me/628973377577?text=Hi%20ADS%20Charcoal,%20I%20am%20interested%20in%20your%20products." class="btn btn-contact" target="_blank">Contact Us</a>
                            <a href="#" class="btn btn-products">Our Products</a>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="about" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">About <span>ADS Charcoal</span></h2>
                <p class="subtitle">The best and Trusted Briquette Charcoal Supplier</p>
            </div>

            <div class="row align-items-start mt-5">
                <div class="col-md-6 pe-lg-5">
                    <h3 class="about-heading mb-4">Your Reliable Partner in Premium Charcoal Products</h3>
                    <p class="about-text">
                        ADS Charcoal is a leading manufacturer and exporter of premium coconut shell charcoal products. 
                        We specialize in producing high-quality Briquette Charcoal, Shisha Charcoal, BBQ Charcoal, 
                        and Gandarusa for international markets.
                    </p>
                    <p class="about-text">
                        Our commitment to quality and customer satisfaction has made us a trusted name in the industry. 
                        We use only the finest raw materials and employ strict quality control measures throughout our 
                        production process to ensure that every product meets the highest standards.
                    </p>
                    <p class="about-text">
                        Located in Bekasi, Indonesia, we are strategically positioned to serve global markets with efficient shipping and logistics.
                    </p>
                </div>

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="position-relative shadow-lg rounded-custom overflow-hidden">
                        <img src="{{ asset('images/about-image.jpg') }}" alt="Briquette Charcoal" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-award"></i> </div>
                        <h4>Premium Quality</h4>
                        <p>Export-grade charcoal products meeting international standards</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h4>Global Export</h4>
                        <p>Serving clients worldwide with reliable shipping</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-cloud-sun"></i> </div>
                        <h4>100% Natural</h4>
                        <p>Made from pure coconut shells with no additives</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Trusted Supplier</h4>
                        <p>Years of experience in the charcoal industry</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-5" style="background-color: #fcfcfc;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Our <span>Products</span></h2>
                <p class="subtitle">Premium quality charcoal products for export markets worldwide</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-4">
                    <div class="feature-card text-start">
                        <div class="feature-icon-wrapper ms-0">
                            <i class="bi bi-fire"></i>
                        </div>
                        <h4>Coconut Shell Charcoal</h4>
                        <p class="mb-3">Premium quality coconut shell charcoal made from carefully selected raw materials. Perfect for various applications with high carbon content and long burning time.</p>
                        <ul class="list-unstyled product-list">
                            <li><i class="bi bi-dot"></i> High Carbon Content</li>
                            <li><i class="bi bi-dot"></i> Long Burning Time</li>
                            <li><i class="bi bi-dot"></i> Low Ash Content</li>
                            <li><i class="bi bi-dot"></i> Eco-friendly</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-start">
                        <div class="feature-icon-wrapper ms-0">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>
                        <h4>Briquette Charcoal</h4>
                        <p class="mb-3">Compressed charcoal briquettes designed for consistent heat and extended burn time. Ideal for industrial and commercial use with uniform size and shape.</p>
                        <ul class="list-unstyled product-list">
                            <li><i class="bi bi-dot"></i> Consistent Heat</li>
                            <li><i class="bi bi-dot"></i> Uniform Shape</li>
                            <li><i class="bi bi-dot"></i> Easy To Use</li>
                            <li><i class="bi bi-dot"></i> Cost-Effective</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-start">
                        <div class="feature-icon-wrapper ms-0">
                            <i class="bi bi-wind"></i>
                        </div>
                        <h4>Shisha Charcoal</h4>
                        <p class="mb-3">Specially crafted for hookah enthusiasts. Our shisha charcoal provides clean burning, minimal smoke, and no unpleasant odor for the perfect session.</p>
                        <ul class="list-unstyled product-list">
                            <li><i class="bi bi-dot"></i> Clean Burning</li>
                            <li><i class="bi bi-dot"></i> Minimal Smoke</li>
                            <li><i class="bi bi-dot"></i> No Odor</li>
                            <li><i class="bi bi-dot"></i> Long-Lasting</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-start">
                        <div class="feature-icon-wrapper ms-0">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h4>BBQ Charcoal</h4>
                        <p class="mb-3">Perfect for grilling and barbecue. Our BBQ charcoal provides intense heat, authentic flavor, and consistent performance for all your outdoor cooking needs.</p>
                        <ul class="list-unstyled product-list">
                            <li><i class="bi bi-dot"></i> High Heat Output</li>
                            <li><i class="bi bi-dot"></i> Natural Flavor</li>
                            <li><i class="bi bi-dot"></i> Quick Ignition</li>
                            <li><i class="bi bi-dot"></i> Stable Temperature</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-start">
                        <div class="feature-icon-wrapper ms-0">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h4>Gandarusa</h4>
                        <p class="mb-3">Traditional herbal product with various applications. Sourced from quality materials and processed with care to maintain its natural properties.</p>
                        <ul class="list-unstyled product-list">
                            <li><i class="bi bi-dot"></i> Natural Product</li>
                            <li><i class="bi bi-dot"></i> Quality Sourced</li>
                            <li><i class="bi bi-dot"></i> Carefully Processed</li>
                            <li><i class="bi bi-dot"></i> Export Ready</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="gallery" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Product <span>Gallery</span></h2>
                <p class="subtitle">Explore our premium quality charcoal products</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery1.jpg') }}" alt="Gallery Charcoal 1" class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery2.jpg') }}" alt="Gallery Charcoal 2" class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery3.jpg') }}" alt="Gallery Charcoal 3" class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery4.jpg') }}" alt="Gallery Charcoal 4" class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery5.jpg') }}" alt="Gallery Charcoal 5" class="img-fluid rounded-custom">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="gallery-item shadow-sm">
                        <img src="{{ asset('images/gallery6.jpg') }}" alt="Gallery Charcoal 5" class="img-fluid rounded-custom">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact <span>Us</span></h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background-color: var(--primary-color);"></div>
                <p class="subtitle mt-3">Get in touch with us for inquiries and orders</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white p-4 p-md-5 rounded-custom shadow-sm h-100">
                        <h4 class="fw-bold mb-4">Send us a Message</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Your Name *</label>
                                <input type="text" class="form-control" placeholder="John Doe">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Email Address *</label>
                                <input type="email" class="form-control" placeholder="john@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Phone Number *</label>
                                <input type="text" class="form-control" placeholder="+971 xxx xxxx xxxx">
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold">Your Message *</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-contact w-100 m-0">
                                <i class="bi bi-send-fill me-2"></i> Send Message via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="d-flex align-items-center bg-white p-3 rounded-custom shadow-sm">
                            <div class="feature-icon-wrapper ms-0 mb-0 me-3" style="width: 45px; height: 45px;">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Address</h6>
                                <small class="text-muted">Gunung Gede 3, Kayuringin Jaya, Bekasi, Indonesia</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-white p-3 rounded-custom shadow-sm">
                            <div class="feature-icon-wrapper ms-0 mb-0 me-3" style="width: 45px; height: 45px;">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Phone / WhatsApp</h6>
                                <small class="text-muted">+628973377577</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-white p-3 rounded-custom shadow-sm">
                            <div class="feature-icon-wrapper ms-0 mb-0 me-3" style="width: 45px; height: 45px;">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Email</h6>
                                <small class="text-muted">arah.dayasejahtera@gmail.com</small>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-custom overflow-hidden shadow-sm" style="height: 250px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.113264639908!2d106.9856!3d-6.2488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTQvNTUuNyJTIDEwNsKwNTknMDguMiJF!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-logo mb-3">
                        <img src="{{ asset('images/logo.jpg') }}" alt="ADS Logo" style="height: 60px; border-radius: 12px; overflow: hidden; display: block;">
                    </div>
                    <p class="footer-desc">The best and Trusted Briquette Charcoal Supplier for export markets worldwide.</p>
                    <div class="social-icons d-flex gap-2">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Our Products</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Coconut Shell Charcoal</a></li>
                        <li><a href="#">Briquette Charcoal</a></li>
                        <li><a href="#">Shisha Charcoal</a></li>
                        <li><a href="#">BBQ Charcoal</a></li>
                        <li><a href="#">Gandarusa</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Contact Us</h5>
                    <ul class="list-unstyled footer-contact">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt-fill me-2 text-primary-color"></i>
                            <span>Gunung Gede 3, Kayuringin Jaya, Bekasi, Indonesia</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-telephone-fill me-2 text-primary-color"></i>
                            <span>+628973377577</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope-fill me-2 text-primary-color"></i>
                            <span>arah.dayasejahtera@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="mt-5 mb-4 border-secondary">

            <div class="text-center">
                <p class="small mb-0 opacity-75">© 2025 ADS Charcoal - All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>