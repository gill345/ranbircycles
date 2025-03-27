<h1>Ranbir's Cycles</h1>
Link to site: <a href="http://ranbircycles.ct.ws/index.php">Ranbir's Cycles</a> <p>Use email test@gmail.com and password Test123! for testing purposes. Or feel free to sign up!</p>

![Screenshot 2025-02-09 170054](https://github.com/user-attachments/assets/dcf69d2f-be06-4426-9202-daf358671d94)

Ranbir's Cycles is a dynamic web application for listing and viewing bicycles available for rent. It enables users to sign up, post a bike for rent, view current listings, manage bicycle listings, request to rent a bicycle, and manage rental requests on a submitted bike. 

## Features
- User Authentication: Register and log in securely.
- Add Bicycle Listings: Users can add bikes with images, prices, and descriptions.
- View Bicycle Details: View detailed information about each bike, filter by user provided specifications.
- Submit Rental Requests: Users can request to rent a bike for a duration of their choosing.
- Manage Rental Requests: Users can delete or respond to rental requests they have made or received from their account menu.
- Responsive Design: Works on various devices.

## Technologies Used
- **Frontend:** HTML, CSS, Bootstrap, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Setup Instructions
1. Clone the repository: `git clone https://github.com/gill345/ranbircycles.git`
2. Set up a MySQL database and import the provided SQL schema.
3. Configure the database connection in `config.php`.
4. Ensure you have PHP and a web server (like XAMPP, or InfinityFree) installed.
5. Start the server and access the application via the browser.

## Database Structure
- **Users:** Stores user information (`id`, `name`, `email`, `password`).
- **Bicycles:** Stores bicycle listings (`id`, `model`, `type`, `rental_cost`, `availability`, `owner_id`, `image_url`, `description`).
- **Rentals:** Stores incoming and outgoing rental requests (`id`, `user_id`, `bicycle_id`, `start_date`, `end_date`, `total_cost`, `message`).

## Future Enhancements
- Potential payment integration
- Mailing Functionality (Cannot at the moment due to free host)
- Design Enhancements
- AI Support Chat Bot






