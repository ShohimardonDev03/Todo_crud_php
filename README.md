# Todo CRUD PHP

This is a simple Todo application built with PHP that allows users to perform CRUD (Create, Read, Update, Delete) operations on todo items. The application uses a PostgreSQL database to store the todo items.

## Features

- Create a new todo item
- Read the list of todo items
- Update the status of a todo item
- Delete a todo item

## Requirements

To run this application, you need to have the following:

- PHP (version 8.0 or higher)
- PostgreSQL database

## Installation

1. Clone the repository:

   ```shell
   git clone https://github.com/ShohimardonDev03/try_1_todo.git
   ```

2. Import the `database.sql` file into your PostgreSQL database.

3. Update the database configuration in the `config.php` file:

   ```php
   define('DB_HOST', 'your_database_host');
   define('DB_PORT', 'your_database_port');
   define('DB_USER', 'your_database_username');
   define('DB_PASS', 'your_database_password');
   define('DB_NAME', 'your_database_name');
   ```

4. Start the PHP development server:

   ```shell
   php -S localhost:8000
   ```

5. Open your browser and visit `http://localhost:8000` to access the application.

## Usage

- **Create a new todo item**: Click on the "Add Todo" button and enter the details of the todo item in the provided form. Click "Submit" to create the item.

- **Read the list of todo items**: The homepage displays a list of existing todo items.

- **Update the status of a todo item**: Click on the "Edit" button next to a todo item. Update the status in the form and click "Save" to apply the changes.

- **Delete a todo item**: Click on the "Delete" button next to a todo item to remove it from the list.

## Contributing

Contributions are welcome! If you find any issues or would like to contribute to this project, please feel free to submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For any inquiries or questions, you can reach me via:

- Email: abdurashitovsh19@gmail.com
- Phone: [+998332035218](tel:+998332035218)
- Telegram: [@shohimardon_dev](https://t.me/shohimardon_dev)
