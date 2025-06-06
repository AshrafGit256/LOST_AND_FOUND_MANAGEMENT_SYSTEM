<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lost and Found</title>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
</head>

<body>
  <header class="header">
    <div class="logo">LOST&FOUND</div>
    <div class="auth-buttons">
      <button class="login"><a href="http://127.0.0.1:8082/login">Log In</a></button>
      <button class="register"><a href="http://127.0.0.1:8082/register">Register</a></button>
    </div>
  </header>

  <section class="Section-top">
    <div class="content">
      <h1>Report What you have Found</h1>
      <div class="me">
        <p>Found something today or this week? Post it and reach people in the area who lost it. It's very easy to use.
        </p>
      </div>

    </div>

  </section>

  <section class="features">
    <div class="feature-box">
      <h3>Lost Cases</h3><br>
      <p>
        At LOST&FOUND, we understand the stress and frustration that comes with losing valuable items. Our platform
        is designed to reunite lost items with their rightful owners quickly and efficiently. With a user-friendly
        interface and robust search functionality, we make it easy individuals to report lost items and for finders
        to submit found items
      </p>

    </div>

    <div class="feature-box">
      <h3>Secure Communication</h3><br>
      <p>
        At Subway, we understand the importance of secure and efficient communication between the loser and the finders
        That's why we offer built-in messaging service that allows users to connect and discuss the details of the Lost
        and found item.When a potential match between a lost and found item, our messaging service enables the users to
        communicate directly and securely.

      </p>
    </div>
    <div class="feature-box">
      <h3>Your peace of mind</h3><br>
      <p>
        Only verified users can post cases, ensuring legitimacy and trust in the platform.
        By using Subway, you can trust that your lost item is in good hands. We're committed to reuniting lost items
        with
        their owners and providing a safe and reliable platform for the community. Report your lost item today and let
        us
        bring it home
      </p>
    </div>
  </section>
  <section>
    <div class="lobby-content">
      <div class="left-lobby">
        <div class="image">
          <img src="{{ url('assets/dist/img/pic5.jpg') }}" alt="">
        </div>
      </div>
      <div class="right-lobby">
        <h1 class="name">
          Our <span>Corporate Team</span>
        </h1>
        <p>
          Our Lost and Found Management System is backed by a dedicated and diverse corporate team,
          each bringing their unique skills and experiences to ensure seamless operations, user satisfaction,
          and continued innovation.The visionary leader driving the overall direction of the company. With a 
          passion for solving real-world problems through smart technology, our CEO ensures that the system 
          aligns with market needs and maintains a user-first approach.Responsible for the technology strategy
           and implementation. The CTO oversees the development team, ensures data security, and leads innovation 
           efforts, ensuring the platform remains robust, scalable, and future-ready.
        </p>
      </div>
    </div>
  </section>
  
  <section class="stats"> 
    <div class="stat-box">
      <div class="stat-icon">
        <img src="{{ url('assets/dist/img/volume.svg') }}" alt="Lost and Found Icon" />
      </div>
      <div class="stat-number">1102</div>
      <p>Lost and Found cases</p>
    </div>
    
    <div class="stat-box">
      <div class="stat-icon">
        <img src="{{ url('assets/dist/img/user.svg') }}" alt="Users Icon" />
        
      </div>
      <div class="stat-number">3000</div>
      <p>Users</p>
    </div>
    
    <div class="stat-box">
      <div class="stat-icon">
        <img src="{{ url('assets/dist/img/location.svg') }}" alt="Locations Icon" />
        
      </div>
      <div class="stat-number">250</div>
      <p>Locations</p>
    </div>
  </section>
  

  <section class="stories">
    <h2>Success Stories</h2>
    <div class="story-cards">
      <div class="story">
        <p>
          I had almost given up hope of ever finding my lost phone, but then something incredible happened.
          Someone kind-hearted came across it and reported it through this platform. What amazed me most was the
          seamless messaging system that connected me directly with the person who found it. We exchanged messages,
          confirmed the details, and arranged a smooth handover. I couldn't believe how easy and effective the whole
          process was. This platform truly restored my faith in humanity. I’m beyond grateful!
        </p><br>
        Sanka Prima
      </div>
      
      <div class="story">
        <p>
          I can’t express how thankful I am for this platform. One evening, I found a wallet on my way home
          and wasn’t sure what to do. I decided to report it here, hoping someone might be looking for it.
          Within hours, I was able to connect with the rightful owner, who was extremely relieved.
          He had almost lost everything — bank cards, identification documents, and even his workplace access cards.
          Witnessing his joy and relief was a deeply moving experience for me. This is more than just a website;
          it’s a lifeline. Thank you for creating such a thoughtful and impactful initiative.
        </p><br>
        Musa Kaido
      </div>
      
      <div class="story">
        <p>
          I had lost my student ID card right before an important exam week, and panic quickly set in.
          But then a friend suggested I check this platform. To my surprise, someone had already posted about finding
          an ID card that matched my description. I reached out, and within a short time, I had my ID back in hand.
          Not only did this help me avoid a lot of stress, but it also introduced me to a community of people
          who genuinely care. Since then, many of my friends have recovered their lost items here too.
          We are all so thankful for this life-changing application. It’s become an essential tool for us all.
        </p><br>
        Lisa Loyce
      </div>
      
    </div>
  </section>

  <footer class="footer">
    <div class="footer-column">
      <div class="logo">SUBWAY</div><br>
      <p>
        <strong>About Us</strong><br />
        Google Search Engine<br /><br>
        A social site where you report lost/found items<br>
      </p>
    </div>
  
    <div class="footer-column">
      <h4>Contact & Sitemap</h4><br>
      <p>
        <a href="#">Contact Us</a><br />
        <a href="#">Sitemap</a><br>
      </p>
    </div>
  
    <div class="footer-column">
      <h4>My Account</h4>
      <p>
        <a href="login">Login</a><br />
        <a href="#">Register</a>
      </p>
    </div>
  
    <div class="footer-column">
      <h4>Mobile Apps</h4>
      <div class="store-links">
        <a href="#" target="_blank">
          <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store" style="height: 40px;" />
        </a>
        <a href="#" target="_blank">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/512px-Google_Play_Store_badge_EN.svg.png" alt="Get it on Google Play" style="height: 40px;" />
        </a>
      </div>
    </div>
  
    <div class="footer-column">
      <h4>Follow Us On</h4>
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook" />
        </a>
        <a href="https://twitter.com" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter" />
        </a>
        <a href="mailto:someone@example.com">
          <img src="https://cdn-icons-png.flaticon.com/24/732/732200.png" alt="Email" />
        </a>
      </div>
    </div>
  </footer>
  
  <div class="copyright">
    <p>All rights reserved ©Copyright 2025 Group B Tech</p>
  </div>
</body>

</html>