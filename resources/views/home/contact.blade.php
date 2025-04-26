<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .subscribe-section {
  background: #f4fdfd;
  padding: 60px 20px;
  text-align: center;
  font-family: Arial, sans-serif;
}

.subscribe-section .container {
  max-width: 700px;
  margin: auto;
}

.subscribe-section h1 {
  font-size: 32px;
  color: #05386b;
  margin-bottom: 15px;
}

.subscribe-section p {
  font-size: 16px;
  color: #444;
  margin-bottom: 25px;
}

.subscribe-form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  margin-bottom: 30px;
}

.subscribe-form input[type="email"] {
  padding: 12px;
  font-size: 16px;
  width: 70%;
  border: 1px solid #ccc;
  border-radius: 6px;
}

.subscribe-form button {
  padding: 12px 20px;
  font-size: 16px;
  background-color: #379683;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.subscribe-form button:hover {
  background-color: #2d7a6a;
}

.contact-info p {
  font-size: 14px;
  color: #666;
}

.contact-info a {
  color: #379683;
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 600px) {
  .subscribe-form input[type="email"] {
    width: 100%;
  }

  .subscribe-form {
    flex-direction: column;
  }
}
    </style>
</head>
<body>
<section class="subscribe-section" id="contact">
  <div class="container">
    <h1>Stay Connected with CEMA</h1>
    <p>Subscribe to receive the latest updates about health programs, services, and important news directly to your inbox.</p>

    <form class="subscribe-form" action="{{ route('subscribe') }}" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Enter your email address" required>
      <button type="submit">Subscribe</button>
    </form>

    <div class="contact-info">
      <p>Need to get in touch? Email us at <a href="mailto:info@cema.org">info@cema.org</a> or call +254 768943521</p>
    </div>
  </div>
</section>
</body>
</html>