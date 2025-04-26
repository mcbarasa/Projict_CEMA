<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.home-intro {
    background-color: #f4fdfd;
    padding: 60px 20px;
    text-align: center;
    font-family: 'Arial', sans-serif;
  }
  
  .home-intro h1 {
    font-size: 36px;
    color: #05386b;
    margin-bottom: 20px;
  }
  
  .home-intro p {
    font-size: 18px;
    max-width: 800px;
    margin: 0 auto 40px;
    color: #333;
  }
  
  .features {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
  }
  
  .feature-card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 25px;
    width: 280px;
    transition: transform 0.3s ease;
  }
  
  .feature-card:hover {
    transform: translateY(-5px);
  }
  
  .feature-card h3 {
    font-size: 20px;
    color: #379683;
    margin-bottom: 10px;
  }
  
  .feature-card p {
    font-size: 14px;
    color: #444;
  }
  
  .cta-button {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 25px;
    background-color: #379683;
    color: #ffffff;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background 0.3s ease;
  }
  
  .cta-button:hover {
    background-color: #2d7a6a;
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .features {
      flex-direction: column;
      align-items: center;
    }
  
    .feature-card {
      width: 90%;
    }
  }  
    </style>
</head>
<body>
    <div class="index" id="about">
    <section class="home-intro">
        <div class="container">
          <h1>Welcome to CEMA</h1>
          <p>
            CEMA is a modern Health Information System designed to simplify client registration, program tracking, and patient care.
            We support health programs such as TB, HIV, and Malaria with easy-to-use tools for healthcare professionals.
          </p>
          <div class="features">
            <div class="feature-card">
              <h3>📋 Register Clients</h3>
              <p>Easily register new patients into the system with essential health information.</p>
            </div>
            <div class="feature-card">
              <h3>🩺 Manage Health Programs</h3>
              <p>Create and manage health programs like TB, HIV, and Malaria for better tracking.</p>
            </div>
            <div class="feature-card">
              <h3>🔍 Search & View Profiles</h3>
              <p>Quickly search for patients and view their enrollment history and profile.</p>
            </div>
          </div>
          <a href="#" class="cta-button">Get Started</a>
        </div>
      </section>
</div>
</body>
</html>