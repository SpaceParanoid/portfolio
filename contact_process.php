<?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $message = $_POST['message'];
              
              $to = "hargis.rose@live.com"; 
              $headers = "From: $email";
              $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";
              
              if (mail($to, $subject, $body, $headers)) {
                  echo "<p>Message sent successfully! We'll get back to you shortly.</p>";
              } else {
                  echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
              }
          }
          ?>