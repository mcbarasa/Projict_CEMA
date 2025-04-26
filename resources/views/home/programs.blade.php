<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.programs-section {
    background-color: #f8fefe;
    padding: 60px 20px;
    text-align: center;
    font-family: 'Arial', sans-serif;
  }
  
  .programs-section h1 {
    font-size: 36px;
    color: #05386b;
    margin-bottom: 10px;
  }
  
  .section-description {
    font-size: 18px;
    color: #555;
    max-width: 800px;
    margin: 0 auto 40px;
  }
  
  .programs-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
  }
  
  .program-card {
    background-color: #ffffff;
    border: 1px solid #e0f0f0;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    width: 300px;
    padding: 25px;
    text-align: left;
    transition: transform 0.3s ease;
    cursor: pointer;
  }
  
  .program-card:hover {
    transform: translateY(-5px); 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); 
    background-color: #f0f8ff;
  }
  
  .program-card h3 {
    color: #379683;
    margin-bottom: 10px;
    font-size: 20px;
  }
  
  .program-card p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    color: #555;
  }
  
  @media (max-width: 768px) {
    .programs-grid {
      flex-direction: column;
      align-items: center;
    }
  
    .program-card {
      width: 90%;
    }
  }
  #dash{
    margin-bottom: 1.4rem;
    height: 2rem;
    width: 7rem;
    cursor: pointer;
    background: #379683;
    border: none;
    border-radius: 4px;
  }
  #dash:hover{
    background: blue;
  }
    </style>
</head>
<body>

<div class="programs" id="programs">

    <section class="programs-section">
        <div class="container">
          <h1>Our Health Programs</h1>
          <p class="section-description">
            At CEMA, we offer comprehensive health programs to support our community’s well-being. 
</br>
              Health Programs Overview
               At CEMA Health Services, we are committed to improving lives through accessible, reliable, and compassionate healthcare programs.
               Our initiatives focus on combating major health challenges such as Tuberculosis (TB), Malaria, HIV/AIDS, and more.
</br>
               We provide preventive education, early diagnosis, continuous treatment, and community support to ensure that every individual gets the care they deserve.
               Join us in building healthier communities, one program at a time.
</br>
               Below are some of the key programs available for enrollment.
          </p>
      <a href="{{ url('dash/program')}}"><button id="dash">Add Program</button></a>
      <a href="{{ url('dash_show/program_show')}}"><button id="dash">Show Programs</button></a>
          <div class="programs-grid">
            <div class="program-card">
              <h3>🧫 TB Program</h3>
              <p>Diagnosis, treatment, and follow-up services for Tuberculosis patients.</p>
            </div>
            <div class="program-card">
              <h3>🦠 HIV Care</h3>
              <p>Ongoing support and medication tracking for HIV-positive individuals.</p>
            </div>
            <div class="program-card">
              <h3>🦟 Malaria Control</h3>
              <p>Prevention, screening, and management of malaria infections.</p>
            </div>
</div>
          </div>
        </div>
      </section>

</div>
</body>
</html>