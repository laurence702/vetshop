# Filament Vet Application  

## Summary  
The Vet Application is a miniature admin tool designed for veterinary practices. Built using Laravel and Filament package, the app provides a user-friendly interface for managing key aspects of a veterinary clinic. The main components of the application include the management of Patients (animals), Owners (clients), and Treatments (medical procedures and price). 
## Key Features  

- **Patient Management**: Easily add, edit, and manage patient records, including medical history and treatment details.  
- **Owner Management**: Maintain detailed profiles for pet owners, allowing for quick access to contact information and animal-related data.  
- **Treatment Scheduling**: Schedule and track treatments for patients, ensuring timely care and follow-up.  
- **Notifications**: Pet Owners receive notifications from the app regarding appointment reminders, treatment updates, and more.  
- **User-Friendly Interface**: Utilize a modern and intuitive interface that enhances user experience through Filament.  

## Getting Started  

Note this app is progressively being built, and features added incrementally

To get started with the Vet Application, follow these steps:  

### Prerequisites  
- PHP >= 8.2 
- Composer  
- Laravel >= 8.x  

### Installation  
1. Clone the repository:  
   ```bash  
   git clone https://github.com/yourusername/vet-application.git
2. Navigate to the project directory:
    ```bash
    cd vet-application
  
3. Install dependencies:
    ```bash
    composer install
  
4.  Set up the environment file:
    ```bash
    cp .env.example .env
  
5.   Generate the application key:
    ```bash
    php artisan key:generate
  
6.    Set up your database configuration in the .env file.

7.    Run the migrations:
    ```bash
    php artisan migrate
  
8.  Seed the database (optional):
    ```bash
    php artisan db:seed
  
9.  Start the development server:
    ```bash
    php artisan serve  