<?php include "include/header.php"; ?>
<div class="main">
  <script>
    AOS.init();
  </script>
  <div id = "text">
    
      <div data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine">
        <article id = "hello">
          Hello my name is Thomas dekker. <br>
          I am 17 years old.<br>
          I am a student at the Horizon colege in hoorn.<br>
          And I do programming as my education.<br>
        </article>
      </div>

        <div data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <article id = "me">
            this is me:<br>
            <img src="/media/img/thomas.jpg" alt="Thomas dekker" id = "thomas">
          </article>
        </div>

        <div data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <article id = "skillsbox">
            <h2>skills</h2><br>
            <h3 class = "skillstext">php:</h3><div class = "skillsbar"><div id = "skillsphp"></div></div>
            <h3 class = "skillstext">javascript:</h3><div class = "skillsbar"><div id = "skillsjs"></div></div>
            <h3 class = "skillstext">sql:</h3><div class = "skillsbar"><div id = "skillssql"></div></div>
            <h3 class = "skillstext">c#:</h3><div class = "skillsbar"><div id = "skillsc"></div></div>
            <h3 class = "skillstext">css:</h3><div class = "skillsbar"><div id = "skillscss"></div></div>
          </article>
      </div>
  </div>
</div>





<?php include "include/footer.php"; ?>