<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="contactUsPageBack sectionPadding">
    <div class="contactUsPage mainView">
        <div class="generalHeading extraHighMargined">
            <h1>راه ارتباطی با ما</h1>
        </div>
        <div class="contactUsPageSectionOne">
            <div class="communicationSec">
                <h5>آدرس</h5>
                <div class="addressContact communications">
                    <svg width="20" height="20" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg"><path d="M14 2.25A9.75 9.75 0 0 1 23.75 12c0 4.12-2.895 8.61-8.61 13.518a1.75 1.75 0 0 1-2.283-.002l-.378-.328C7.017 20.408 4.25 16.028 4.25 12A9.75 9.75 0 0 1 14 2.25Zm0 1.5A8.25 8.25 0 0 0 5.75 12c0 3.502 2.548 7.537 7.715 12.057l.372.323a.25.25 0 0 0 .326 0c5.416-4.652 8.087-8.795 8.087-12.38A8.25 8.25 0 0 0 14 3.75Zm0 4.5a3.75 3.75 0 1 1 0 7.5 3.75 3.75 0 0 1 0-7.5Zm0 1.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" fill="#324b4f"/></svg>
                    <a href="#"><span>تهران ، فلسطین ، بین خیابان انقلاب و نایبی، پلاک 328</span></a>
                </div>
                <h5>شماره تماس</h5>
                <div class="phoneContact communications">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M10.554 6.24 7.171 2.335c-.39-.45-1.105-.448-1.558.006L2.831 5.128c-.828.829-1.065 2.06-.586 3.047a29.207 29.207 0 0 0 13.561 13.58c.986.479 2.216.242 3.044-.587l2.808-2.813c.455-.455.456-1.174.002-1.564l-3.92-3.365c-.41-.352-1.047-.306-1.458.106l-1.364 1.366a.462.462 0 0 1-.553.088 14.557 14.557 0 0 1-5.36-5.367.463.463 0 0 1 .088-.554l1.36-1.361c.412-.414.457-1.054.101-1.465Z" stroke="#324b4f" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<a href="#"><span>09129357247</span></a>
                </div>
                <h5>ایمیل</h5>
                <div class="emailContact communications">
                    <svg width="20" height="20" fill="#324b4f" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 3H2a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1Zm-1 16H3V9.477l8.628 3.452a1.01 1.01 0 0 0 .744 0L21 9.477Zm0-11.677-9 3.6-9-3.6V5h18Z"/></svg>
                    <a href=""><span>info@arshidabest.ir</span></a>
                </div>
                <h5>روز های کاری</h5>
                <div class="daysContact">
                    <li class="darkListStyle">هر روز</li>
                    <li class="darkListStyle">هر ساعت از شبانه روز</li>
                </div>
            </div>
            <div class="formSec">
                <?php echo do_shortcode('[contact-form-7 id="ca931f4" title="فرم صفحه تماس باما"]') ?>
            </div>
        </div>
        <div class="contactUsPageSectionTwo extraHighMargined">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d681.1239918733196!2d51.402771718935995!3d35.70186395673047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snl!4v1698398919120!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php get_footer(); ?>