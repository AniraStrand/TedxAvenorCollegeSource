<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile; ?>
<body>
    <div class="img-container">
        <picture>
        <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri();?>/img/Tedx3.png">
        <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri();?>/img/Tedx4.png">
        <img src="<?php echo get_template_directory_uri();?>/img/Tedx3.png"alt="" id="" width=100% height=100%>
        </picture>
    </div>
    <div class="buy-tickets">
        <p style=>Join the action.</p>
        <a href="https://www.entertix.ro/evenimente/13419/tedxyouth-avenor-college-5-november-2022-teatrul-tandarica-bucuresti.html" class="button">BUY TICKETS</a>
    </div>
    <div class="speakers">
        <br>
        <br>
        <h1 class="speakers-title">SPEAKERS</h1>
        <br>
        <br>
            <!-- SPEAKER PROFILES LEFT-->
            <div class="speaker-profile-LEFT1">
                <img src="<?php echo get_template_directory_uri();?>/img/IonutBudisteanu.png" style="float: left;">
                <h1 class="speaker-profile-name">&nbsp;&nbsp;Ionuț Budișteanu</h1>
                <p class="speaker-profile-role">&nbsp;&nbsp;Tech Inventor - Founder of WebDollar - &nbsp;&nbsp;the first Romanian digital &nbsp;&nbsp;cryptocurrency.</p>
            </div>
            <div class="speaker-profile-LEFT2">
                <img src="<?php echo get_template_directory_uri();?>/img/CristinaBatlan.png" style="float: right;">
                <h1 class="speaker-profile-name">Cristina Bâtlan&nbsp;&nbsp;</h1>
                <p class="speaker-profile-role">Founder of Musette&nbsp;&nbsp;</p>
            </div>
            <div class="speaker-profile-LEFT3">
                <img src="<?php echo get_template_directory_uri();?>/img/ElisabetaMoraru.png" style="float: left;">
                <h1 class="speaker-profile-name">&nbsp;&nbsp;Elisabeta Moraru</h1>
                <p class="speaker-profile-role">&nbsp;&nbsp;Country Manager Google</p>
            </div>
            <div class="speaker-profile-LEFT4">
                <img src="<?php echo get_template_directory_uri();?>/img/CiprianLupu.png" style="float: right;">
                <h1 class="speaker-profile-name">Ciprian Lupu&nbsp;&nbsp;</h1>
                <p class="speaker-profile-role">Rally Driver&nbsp;&nbsp;</p>
            </div>
            <!--SPEAKER PROFILES RIGHT-->
            <div class="speaker-profile-RIGHT1">
                <img src="<?php echo get_template_directory_uri();?>/img/DanaPapadima.png" style="float: left;">
                <h1 class="speaker-profile-name">&nbsp;&nbsp;Dana Papadima</h1>
                <p class="speaker-profile-role">&nbsp;&nbsp;Educational Director at Avenor College</p>
            </div>
            <div class="speaker-profile-RIGHT2">
                <img src="<?php echo get_template_directory_uri();?>/img/FranciscDobos.png" style="float: right;">
                <h1 class="speaker-profile-name">Francisc Doboș&nbsp;&nbsp;</h1>
                <p class="speaker-profile-role">Parish Priest Head of the Office for&nbsp;&nbsp; Evangelization and Human Promotion&nbsp;&nbsp;</p>
            </div>
            <div class="speaker-profile-RIGHT3">
                <img src="<?php echo get_template_directory_uri();?>/img/OanaGheorghiu.png" style="float: left;">
                <h1 class="speaker-profile-name">&nbsp;&nbsp;Oana Gheorghiu</h1>
                <p class="speaker-profile-role">&nbsp;&nbsp;Founder 'Dăruiește Viață'</p>
            </div>
            <div class="speaker-profile-RIGHT4">
                <img src="<?php echo get_template_directory_uri();?>/img/ChristianaBudica.png" style="float: right;">
                <h1 class="speaker-profile-name">Christiana Budica&nbsp;&nbsp;</h1>
                <p class="speaker-profile-role">Kickboxing World Champion&nbsp;&nbsp;</p>
            </div>
    </div>
    <div class="event-info">
        <h1 class="title" style="text-decoration: underline;">EVENT INFO</h1>
        <h2>THEME</h2>
        <h3>Ctrl+Alt+Delete, Reset & Start over</h3>
        <br>
        <h2>WHEN</h2>
        <h3>5th November 2022, 4 PM (16:00)</h3>
        <br>
        <h2>WHERE</h2>
        <h3>Teatrul Țăndărică, Strada General Eremia Grigorescu 24, București 010476</h3>
    </div>
    <div class="what-is-tedx">
        <br>
        <h1 class="title" style="color: white; text-decoration: underline;">What is TEDx?</h1>
        <br>
        <p class="what-is-tedx-para">In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxYouth@AvenorCollege, where x = independently organized TED event. At our TEDxYouth@AvenorCollege event, TED Talks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>
        <br>
        <a href="https://www.ted.com/about/programs-initiatives/tedx-program" class="link">TEDx Program</a>
        <br>
        <br>
    </div>
    <div class="socials">
        <br>
        <h1>SOCIALS</h1>
        <a href="https://www.instagram.com/tedxyouth_avenorcollege/?=igshid%3DTmMyMTA2M2Y"><img src="<?php echo get_template_directory_uri();?>/img/insta.png" alt="Instagram Account" style="width:42px;height:42px;"></a>
        &emsp;
        &emsp;
        &emsp;
        <a href="https://www.facebook.com/people/Ted-Avenor/100085908562035/"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" alt="Facebook Account" style="width:42px;height:42px;"></a>
        &emsp;
        &emsp;
        &emsp;
        <a href="https://www.ted.com/tedx/events/49493"><img src="<?php echo get_template_directory_uri();?>/img/TEDx.png" alt="TED Page" style="width:42px;height:42px;"></a>
    </div>
    <br>
    <br>
<?php get_sidebar(); ?>
<?php get_footer(); ?>