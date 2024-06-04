<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | BizAstro</title>
    
    <!-- CSS styling -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css?v=5">
</head>
<body>  
    
    <?php 
        include 'header.php';
    ?>

    <div class="container-fluid contact-container-out">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="contact-container">
                        <h4 class="h4">Contact</h4>
                        <h2>Get in Touch</h2>
                        <p>Reach out to us through the channels below and let's embark on a journey fueled by planetary wisdom and strategic foresight</p>
                        <a href="https://calendly.com/muthuvijayanelango/15-mins-appointment" target="_blank" class="btn btn-danger btn-prime">Book an appointment</a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="form-container">
                    <?php if (isset($validationErrors)): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($validationErrors as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                        <form class="form" id="homeform" name="enquiryForm" action="form-process.php" method="post" onsubmit="return validateForm();">
                            <div class="form-inner row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input class="form-control" placeholder="Name" type="text" id="name" name="name" required>
                                        <span class="error-message" id="nameError">Please enter your name</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" placeholder="Email Id" type="email" id="email" name="email" required>
                                        <span class="error-message" id="emailError">Please enter a valid email address</span>                                        
                                    </div>                                
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" placeholder="Mobile No." type="text" id="phone" name="phone" required>
                                        <span class="error-message" id="phoneError">Please enter a 10-digit phone number</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <textarea class="form-control" placeholder="Message" id="message" name="message" rows="3"></textarea>                                    
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn btn-submit btn-bizastro">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FAQ Start -->
    <section class="container-fluid fag-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <h2 class="h2">Frequently
                            Asked questions</h2>
                    </div>
                    <div class="col-md-9 col-lg-9">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        When should I seek astrological guidance to improve my business?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Vedic Astrology can provide valuable guidance for various business scenarios, including expanding your current business, initiating new ventures, forming partnerships, entering new markets, and making business investments. Whether you're considering strategic decisions or seeking clarity on future opportunities, astrology can offer insights to enhance your business endeavours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        How can astrology help me identify untapped markets with a high likelihood of success?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Timing and preparation are key elements of success. Vedic Astrology provides insights into opportune moments for business growth while also warning against unfavourable timings. At BizAstro, we leverage astrology to pinpoint the most advantageous times from your horoscope, combined with our market expertise, to help you navigate and penetrate untapped markets effectively.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                            Is it important to initiate a new business endeavour on an auspicious date/time?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Absolutely. As Carl Jung said, "Whatever is born or done at this moment of time has the qualities of this moment of time." At BizAstro, we've assisted numerous individuals in commencing their businesses at the most opportune moments. By meticulously analysing their horoscopes for strengths and weaknesses, we select auspicious dates/times for new business endeavours. This enables them to harness the positive forces of nature, ensuring success in their endeavours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Does the business name influence its long-term growth and success? If yes, how do I choose the best name for my business?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Absolutely. Numbers, the silent architects of our universe, have always fascinated curious minds. Numerology, the science of numbers, plays a pivotal role in selecting a name that aligns with the laws of life and harmony with nature, thus ensuring lasting success and happiness. A business name that resonates with harmonious numbers stands the test of time, while those with conflicting numbers may falter quickly. At BizAstro, we've assisted numerous business owners in selecting the optimal numerology name for their businesses, resulting in profound impacts on their chosen business areas.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Are there geopolitical or celestial events that could affect my business operations?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, Mundane astrology, a specialised branch of astrology, can predict global events such as wars, epidemic outbreaks, and natural disasters. Any of these events can potentially impact your business operations. Therefore, it is advisable to consult professional astrologers to understand predictions of upcoming global events and prepare accordingly.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsesix" aria-expanded="false"
                                        aria-controls="flush-collapsesix">
                                        Are there favourable periods for making significant business investments?
                                    </button>
                                </h2>
                                <div id="flush-collapsesix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                    Many people make substantial investments at the wrong time, leading to losses. It's crucial to invest at the right moment to maximise profits and grow your business. Your horoscope can reveal the optimal times for making investments, helping you to achieve the best possible outcomes for your business.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ end -->

    
    <?php 
        include 'footer.php';
    ?>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
    <script src="asset/js/script.js"></script>

    
    <script>
        function validateForm() {
            var name = document.forms["enquiryForm"]["name"].value;
            var email = document.forms["enquiryForm"]["email"].value;
            var phone = document.forms["enquiryForm"]["phone"].value;
            var message = document.forms["enquiryForm"]["message"].value;
            var isValid = true;

            // Reset error messages
            document.getElementById("nameError").style.display = "none";
            document.getElementById("emailError").style.display = "none";
            document.getElementById("phoneError").style.display = "none";

            if (name === "" || name.length < 3) {
                document.getElementById("nameError").style.display = "block";
                isValid = false;
            }

            // Simple email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                document.getElementById("emailError").style.display = "block";
                isValid = false;
            }

            // Simple phone number validation (10 digits)
            var phoneRegex = /^\d{10}$/;
            if (!phone.match(phoneRegex)) {
                document.getElementById("phoneError").style.display = "block";
                isValid = false;
            }

            if (message === "") {
                document.getElementById("messageError").style.display = "block";
                isValid = false;
            }

            return isValid;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Attach a submit event handler to the form
            $("form[name='enquiryForm']").submit(function(event) {
                // Prevent the default form submission behavior
                event.preventDefault();
        
                // Serialize form data
                // var formData = $(this).serialize();
                var formvalue = $("#homeform")[0];
                var formData = new FormData(formvalue);
        
                // Perform AJAX POST request
                $.ajax({
                    type: "post",
                    url: "form-process.php", // Change to the actual URL
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: true,
                    beforeSend: function() {
                        $('.btn-bizastro').html('<div class="">Processing...</div>');
                        $('.btn-bizastro').attr("disabled", true);
                    },
                    success: function(response) {
                        // Handle the response here, e.g., show a success message
                        //alert("Form submitted successfully!");
                        // You can also redirect to a thank you page if needed
                        $('.btn-bizastro').html('<div class="">Submit</div>');
                        $('.btn-bizastro').attr("disabled", false);
                    
                        window.location.href = "thank_you.html";
                    },
                    error: function(xhr, status, error) {
                        // Handle errors, e.g., show an error message
                        alert("An error occurred: " + error);
                    }
                });
            });
        });
    </script>
</body>
</html>