<?php include 'include/header.php'; ?>
        <!--========== Header Section End ==============-->

        <!--=========== breadcrumb Section Start =========-->
        <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sc-slider-content p-z-idex">
                            <div class="sc-slider-subtitle">Home - Contact Us</div>
                            <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Millions strong globally, Aquent's reach is everywhere</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                        <div class="col-lg-4">
                            <span>250K+</span><tr>
                            <span>Hiring Managers Serviced  </span>
                        </div>
                        <div class="col-lg-4">
                            <span>45K+</span>
                            <span>Clients Over Time</span></div>
                        <div class="col-lg-4">
                            <span>2500</span>
                            <span>Active Clients Today</span></div>
                        </div>               
            </div>
        </div>
        <!--=========== breadcrumb Section End =========-->

        <!--=========== Contact Section Start =========-->
        <div class="section__inner">
    <div class="section__content row">
        <div class="section__col col-lg-8">
            <h2 class="form-radio-switcher__heading">Send a message:</h2>
            <p class="form-radio-switcher__subheading">Type of Enquiry:</p>

            <form id="contact-switcher">
                <input type="radio" id="find-talent" class="find-talent" name="action" value="find-talent" checked="true">
                <label for="find-talent">Hire talent</label>
                 <input type="radio" id="find-work" class="find-work" name="action" value="find-work">
                <label for="find-work">Find work</label>
                <input type="radio" id="contact-agent" class="contact-agent" name="action" value="contact-agent">
                <label for="contact-agent">Contact a Talent Agent</label>
                <input type="radio" id="general-inquiry" class="general-inquiry" name="action" value="general-inquiry">
                <label for="general-inquiry">General enquiry</label>
            </form>

            <hr class="section-separator">

            <div class="radio-toggle">
                <div data-panel="find-talent" class="active lead-form-wrapper" id="lead-form-wrapper">
                 <form id="hire-talent-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <button type="submit">Submit</button>
                </form>                    
            </div>
            <div data-panel="find-work" class="lead-form-wrapper">
             <h3>Looking for work?</h3>
              <p>Browse jobs or create a MyAquent account to get started.</p>
             <button id="search-button">Search</button>
            </div>
           <div data-panel="contact-agent" class="lead-form-wrapper">
              <h3>Looking for a Talent Agent?</h3>
               <p>Browse through our team profiles and get in touch.</p>
                <button id="view-team-button">VIEW TEAM</button>
           </div>
           <div data-panel="general-enquiry" class="lead-form-wrapper">
              <h3>Got a question for Aquent?</h3>
                 <p>If you need help or have a general question, email us at: aquentaustralia@aquent.com.</p>
                <button id="send-email-button">SEND AN EMAIL</button>
           </div>

            </div>
        </div>
        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const radioSwitcher = document.getElementById('contact-switcher');
        const radioToggle = document.querySelector('.radio-toggle');

        radioSwitcher.addEventListener('change', function (event) {
            const selectedPanel = event.target.value;
            const allPanels = document.querySelectorAll('.lead-form-wrapper');

            allPanels.forEach(panel => {
                if (panel.dataset.panel === selectedPanel) {
                    panel.classList.add('active');
                } else {
                    panel.classList.remove('active');
                }
            });
        });

        //  Hide all panels except the "hire-talent" panel initially
         const allPanels = document.querySelectorAll('.lead-form-wrapper');
         allPanels.forEach(panel => {
         if (panel.dataset.panel !== 'find-talent') {
                panel.classList.remove('active');
            }
        });

        // Add event listeners for the "find-work" button
        const searchButton = document.getElementById('find-talent');
        searchButton.addEventListener('click', function () {
            const findWorkPanel = document.querySelector('[data-panel="find-work"]');
            findWorkPanel.classList.add('active');
            const allPanelsExceptFindWork = document.querySelectorAll('.lead-form-wrapper:not([data-panel="find-work"])');
            allPanelsExceptFindWork.forEach(panel => panel.classList.remove('active'));
        });

        // Add event listeners for other buttons as needed
        const viewTeamButton = document.getElementById('view-team-button');
        viewTeamButton.addEventListener('click', function () {
            const contactAgentPanel = document.querySelector('[data-panel="contact-agent"]');
            contactAgentPanel.classList.add('active');
            const allPanelsExceptContactAgent = document.querySelectorAll('.lead-form-wrapper:not([data-panel="contact-agent"])');
            allPanelsExceptContactAgent.forEach(panel => panel.classList.remove('active'));
        });

        const sendEmailButton = document.getElementById('send-email-button');
        sendEmailButton.addEventListener('click', function () {
            const generalEnquiryPanel = document.querySelector('[data-panel="general-enquiry"]');
            generalEnquiryPanel.classList.add('active');
            const allPanelsExceptGeneralEnquiry = document.querySelectorAll('.lead-form-wrapper:not([data-panel="general-enquiry"])');
            allPanelsExceptGeneralEnquiry.forEach(panel => panel.classList.remove('active'));
        });
    });
</script>


        <div class="section__col col-lg-4"><br>
        <h3>Get Support:</h3>
            <div class="l-columns__column">
            <div class="sc-contact-info sc-mt-35 sc-mb-20">
                            <ul class="list-gap white-color">
                                <li><i class="icon-phone-2"></i><a href="tel:+1(520)2563650"> 02 (585) 632 8585</a></li>
                                <li>
                                    <i class="icon-gap_2"></i>
                                    <a href="mailto:info@boxfin24.com"> info@example.com</a>
                                </li>
                                <li>
                                    <i class="icon-mail2"></i
                                    ><a href="mailto:info@boxfin24.com">4983 Walnut Avenue Mountain Home, ID 83648</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sc-chat-box">
                            <a class="sc-transparent-btn" href="#"><i class="icon-chat"></i> Live Chat</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>




        <!--=========== Contact Section End =========-->

       

        <?php include 'include/footer.php'; ?>