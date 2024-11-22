<!-- <form action="/create" method="POST">
    @csrf
<label for="title"> Title</label>
<input type="text"  name="title"><br>
<label for="body">Body</label>
<textarea name="body" row="30" cols="30" id=""></textarea>
<button>submit</button>

</form> -->
<!-- 
// Form submission handler
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validation and submission logic goes here
}
?> -->


<h1 class="register">REGISTER FOR IPPC 2025</h1>

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
