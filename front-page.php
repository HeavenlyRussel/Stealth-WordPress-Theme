<?php get_header(); ?>

<main class="main-content">  
    <!-- Hero Section -->
    <section class="hero container">
        <h2 class="hero__title">Full-Stack Web Developer</h2>
        <p class="hero__subtitle">I build scalable, secure, and fast applications using Python/Flask, HTML, CSS, JavaScript, custom WordPress, and PostgreSQL.</p>
        <a href="#work" class="btn btn--primary">View My Work</a>
    </section>

    <!-- Case Studies Section -->
    <section id="work" class="work container">
        <h3 class="section-title">Selected Projects</h3>
        
        <div class="project-card">
            <div class="project-card__header">
                <h4 class="project-card__title">Tindahan Companion</h4>
                <a href="https://github.com/HeavenlyRussel/Stealth-WordPress-Theme" target="_blank">View Project</a>
            </div>
            <div class="project-card__content">
                <p><strong>Situation:</strong> Neighborhood variety stores rely heavily on manual notebook logging for daily sales and merchandise tracking.</p>
                <p><strong>Complication:</strong> Traditional paper records cause stock discrepancies, untracked inventory shrinkage, and lack secure ways to delegate store duties to other family members or staff.</p>
                <p><strong>Action:</strong> Built a lightweight, mobile-first Flask web application featuring automatic inventory deduction per sale, multi-item cashiering, and real-time store performance dashboards.</p>
                <p><strong>Result:</strong> Digitized daily store operations, preventing tally errors and providing real-time stock levels and sales dashboard metrics on mobile devices.</p>
            </div>
        </div>

        <div class="project-card">
            <div class="project-card__header">
                <h4 class="project-card__title">Stealth Theme - Custom WordPress Engineering</h4>
                <a href="#" target="_blank">View Project</a>
            </div>
            <div class="project-card__content">
                <p><strong>Action:</strong> Engineered this lightweight, secure WordPress theme entirely from scratch without relying on bloated drag-and-drop builders. Developed raw PHP templates, managed asset enqueueing via WordPress hooks, and applied Block Element Modifier (BEM) CSS methodology for a highly performant frontend.</p>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience container">
        <h3 class="section-title">Experience & Credentials</h3>
        <ul class="experience-list">
            <li>
                <strong>Intern Web Developer | PUP ICT Office</strong><br>
                Worked on an internship project developing a full-stack Event Management System (EMS) web application assigned by the PUP Information and Communications Technology Office.
            </li>
            <li>
                <strong>National Certificate II in Computer Systems Servicing | Technical Educations & Skills Development Authority</strong><br>
                Certified competency in hardware diagnostics, network configuration, and systems troubleshooting.
            </li>
            <li>
                <strong>National Certificate III in Visual Graphic Design | Technical Educations & Skills Development Authority</strong><br>
                Certified competency on UI/UX designs, logo designs, and print media designs.
            </li>
        </ul>
    </section>

    <!-- Dynamic Page Content from WordPress Editor -->
    <section class="container page-intro">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </section>

    <!-- Contact & Hire CTA Section -->
    <section id="contact" class="contact container">
        <h3 class="section-title">Let's Build Something</h3>
        <p class="contact__text">
            I am available for freelance contracts, full-stack web applications, and custom WordPress theme development.
        </p>
        <div class="contact__actions">
            <a href="https://www.upwork.com" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                Hire Me on Upwork
            </a>
            <a href="mailto:your-email@example.com" class="btn btn--secondary">
                Send Direct Email
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>