
<h2 class="register">REGISTER FOR IPPC 2025</h2>
<h1 class="register2">Your IPPC Registration form submitted Successfully</h1>

<form action="/create" method="post" class="form">
    @csrf
    
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text"  id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email"  name="email" required>
  </div>
  <div class="form-group">
    <label for="message">Message:</label>
    <textarea placeholder="TYPE IN YOUR MESSAGES HERE" id="message" name="message" required></textarea>
  </div>
  <button type="submit" class="btn">Send Message</button>
</form>



<link rel="stylesheet" href="{{ asset('css/app.css') }}">
