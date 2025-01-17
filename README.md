<div align="center">
<h1>Hola, soy <a href="https://aristi.dev">Bryan</a> 👋</h1>
<img src="https://i.imgur.com/NTrNroJ.png" width="800">
</div>

# Hello World PHP Application

This is a simple "Hello World" application built with PHP. It displays a welcome message and includes a button that shows "Congratulations, you have started a deploy in PHP" when clicked. This project is set up to run in a Docker container with Apache for easy deployment.

## Description

The application consists of a single `index.php` file that displays a welcome message and a button. The button, when clicked, shows a congratulatory message. The project is designed to run on an Apache server within a Docker container.

## Features

- Displays a "Hello World" message in PHP.
- Includes a button to show a deployment success message.
- Docker containerization for easy setup and deployment.

## Project Structure

```bash
hello-world-php/
├── Dockerfile
├── index.php
└── README.md
```

- **Dockerfile**: Configures the Docker container to run the PHP application with Apache.
- **index.php**: The PHP file that displays the "Hello World" message and button.
- **README.md**: This file, which explains how to run and use the project.

## How to Run the Project

### 1. Clone the repository:

```bash
git clone https://github.com/your_username/hello-world-php.git
cd hello-world-php
```

### 2. Build the Docker image:

Build the Docker image using the following command:

```bash
docker build -t hello-world-php .
```

### 3. Run the Docker container:

Run the container on port `8080`:

```bash
docker run -p 8080:80 hello-world-php
```

This will make the application available at [http://localhost:8080](http://localhost:8080).

### 4. Access the Application:

Open your web browser and go to `http://localhost:8080` to see the "Hello World" message and interact with the button.

## License

This project is open-source and available under the MIT License. See the [LICENSE](LICENSE) file for more details.
```
