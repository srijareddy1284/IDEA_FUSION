<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="collaboration.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Idea Fusion Logo">
        </div>
    </header>

    <label>
        <input type="checkbox">
        <div class="toggle">
            <span class="top_line common"></span>
            <span class="middle_line common"></span>
            <span class="bottom_line common"></span>
        </div>

        <div class="slide">
            <h1>MENU</h1>
            <ul>
                <li><a href="#dashboard"> <i class="fa-solid fa-chart-simple"></i> Dashboard</a></li>
                <li><a href="#messages"> <i class="fa-regular fa-message"></i> Messages</a></li>
                <li><a href="#projects"> <i class="fa-solid fa-handshake"></i> Projects</a></li>
                <li><a href="#tasks"> <i class="fa-sharp fa-solid fa-list-check"></i> Tasks</a></li>
                <li><a href="calendar.html"> <i class="fas fa-calendar"></i> Calendar</a></li>
                <li><a href="#documents"> <i class="fa-regular fa-file"></i> Document Collaboration</a></li>
                <li><a href="whiteboard.html"> <i class="fa-solid fa-chalkboard"></i> Whiteboard</a></li>
                <li><a href="#settings"> <i class="fas fa-cogs"></i> Settings</a></li>
            </ul>
        </div>
    </label>

    <main>
        
            <h2>Dashboard</h2>
            <div class="welcome-message">
                <h3>Welcome, User!</h3>
                <p>Here is an overview of your recent activities and metrics.</p>
            </div>
            <div class="stats">
                <div class="stat">
                    <h4>New Messages</h4>
                    <p>10</p>
                </div>
                <div class="stat">
                    <h4>Projects in Progress</h4>
                    <p>5</p>
                </div>
                <div class="stat">
                    <h4>Tasks Completed</h4>
                    <p>8</p>
                </div>
            </div>
            <div class="recent-activity">
                <h3>Recent Activity</h3>
                <ul>
                    <li>Project A - Task 1 completed</li>
                    <li>New message from John</li>
                    <li>Meeting scheduled for tomorrow</li>
                </ul>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <button>New Project</button>
                <button>View Messages</button>
                <button>Add Task</button>
            </div>
            <div class="notifications">
                <h3>Notifications</h3>
                <p>No new notifications</p>
            </div>
            <div class="upcoming-events">
                <h3>Upcoming Events</h3>
                <ul>
                    <li>Project B deadline - May 20, 2024</li>
                    <li>Team meeting - May 22, 2024</li>
                </ul>
            </div>
        </div>

        <div id="messages" class="content">
            <h2>Messages</h2>
            <div class="message-container">
                <div class="inbox">
                    <h3>Inbox</h3>
                    <ul id="inbox-list">
                        <!-- Example message item -->
                        <li>
                            <div class="message-header">
                                <span class="sender">John Doe</span>
                                <span class="timestamp">May 12, 2024</span>
                            </div>
                            <div class="subject">Meeting Reminder</div>
                        </li>
                    </ul>
                </div>
                <div class="sent-messages">
                    <h3>Sent Messages</h3>
                    <ul id="sent-list">
                        <!-- Example sent message item -->
                        <li>
                            <div class="message-header">
                                <span class="recipient">Jane Smith</span>
                                <span class="timestamp">May 10, 2024</span>
                            </div>
                            <div class="subject">Project Update</div>
                        </li>
                    </ul>
                </div>
                <div class="compose-message">
                    <h3>Compose Message</h3>
                    <form id="compose-form">
                        <label for="recipient">To:</label>
                        <input type="text" id="recipient" name="recipient" required>
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required>
                        <label for="message-body">Message:</label>
                        <textarea id="message-body" name="message-body" rows="5" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="search-messages">
                    <h3>Search Messages</h3>
                    <input type="text" id="search-input" placeholder="Search messages...">
                </div>
            </div>
        </div>
        
        <div id="projects" class="content">
            <h2>Projects</h2>
            <div class="project-container">
                <div class="project-list">
                    <h3>Project List</h3>
                    <ul id="project-list">
                        <!-- Example project item -->
                        <li>
                            <div class="project-header">
                                <span class="project-name">Project Alpha</span>
                                <span class="project-dates">May 1, 2024 - Aug 1, 2024</span>
                            </div>
                            <div class="project-description">This is a sample project description.</div>
                        </li>
                    </ul>
                </div>
                <div class="add-project">
                    <h3>Add New Project</h3>
                    <form id="add-project-form">
                        <label for="project-name">Project Name:</label>
                        <input type="text" id="project-name" name="project-name" required>
                        <label for="project-description">Description:</label>
                        <textarea id="project-description" name="project-description" rows="3" required></textarea>
                        <label for="start-date">Start Date:</label>
                        <input type="date" id="start-date" name="start-date" required>
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" name="end-date" required>
                        <button type="submit">Add Project</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="tasks" class="content">
            <h2>Tasks</h2>
            <div class="task-container">
                <div class="task-list">
                    <h3>Task List</h3>
                    <ul id="task-list">
                        <!-- Example task item -->
                        <li>
                            <div class="task-header">
                                <span class="task-name">Task 1</span>
                                <span class="task-due-date">Due: May 15, 2024</span>
                            </div>
                            <div class="task-status">Status: Pending</div>
                        </li>
                    </ul>
                </div>
                <div class="add-task">
                    <h3>Add New Task</h3>
                    <form id="add-task-form">
                        <label for="task-name">Task Name:</label>
                        <input type="text" id="task-name" name="task-name" required>
                        <label for="task-description">Description:</label>
                        <textarea id="task-description" name="task-description" rows="3" required></textarea>
                        <label for="due-date">Due Date:</label>
                        <input type="date" id="due-date" name="due-date" required>
                        <label for="task-priority">Priority:</label>
                        <select id="task-priority" name="task-priority" required>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                        <button type="submit">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="calendar" class="content">
            <h2>Calendar</h2>
            <p>This is the Calendar section.</p>
        </div>
        <div id="documents" class="content">
            <h2>Document Collaboration</h2>
            <p>This is the Document Collaboration section.</p>
        </div>
        <div id="whiteboard" class="content">
            <h2>Whiteboard</h2>
            <p>This is the Whiteboard section.</p>
        </div>
        <div id="settings" class="content">
            <h2>Settings</h2>
            <p>This is the Settings section.</p>
        </div>
    </main>

</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: grey;
}

header {
    background-color: black;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height:120px;
}

header .logo img {
    height: 50px;
}

nav {
    display: flex;
    align-items: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

nav a:hover {
    text-decoration: underline;
}

label {
    position: relative;
}

.toggle {
    position: absolute;
    height: 30px;
    width: 30px;
    top: 20px;
    left: 15px;
    z-index: 1;
    cursor: pointer;
    border-radius: 2px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.toggle .common {
    position: absolute;
    height: 2px;
    width: 20px;
    background-color: black;
    border-radius: 50px;
    transition: 0.3s ease;
}

.toggle .top_line {
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.toggle .middle_line {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.toggle .bottom_line {
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
}

input {
    display: none;
    visibility: none;
    -webkit-appearance: none;
}

input:checked ~ .toggle .top_line {
    left: 2px;
    top: 14px;
    width: 25px;
    transform: rotate(45deg);
}

input:checked ~ .toggle .bottom_line {
    left: 2px;
    top: 14px;
    width: 25px;
    transform: rotate(-45deg);
}

input:checked ~ .toggle .middle_line {
    opacity: 0;
    transform: translateX(20px);
}

.slide {
    height: 100%;
    width: 180px;
    position: fixed;
    background-color: black;
    transition: 0.5s ease;
    transform: translateX(-180px);
    top: 11%;
    left: 0;
    bottom:10%;
    z-index: 1000;
    padding-top: 60px;
}

input:checked ~ .slide {
    transform: translateX(0);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

.slide h1 {
    color: white;
    font-weight: 800;
    text-align: center;
    padding: 10px 0;
    pointer-events: none;
}

.slide ul {
    padding: 0;
}

.slide ul li {
    list-style: none;
}

.slide ul li a {
    color: white;
    font-weight: 500;
    padding: 10px 20px;
    display: block;
    text-transform: capitalize;
    text-decoration: none;
    transition: 0.2s ease-out;
}

.slide ul li a:hover {
    background-color: grey;
}

.slide ul li a i {
    margin-right: 10px;
}

main {
    flex-grow: 1;
    padding: 20px;
    margin-left: 200px; /* Adjust this value based on sidebar width */
    transition: margin-left 0.5s ease;
}

.content {
    display: none;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#dashboard {
    display: block;
}

.welcome-message {
    margin-bottom: 20px;
}

.stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.stat {
    background: #f0f0f0;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    width: 30%;
}

.recent-activity {
    margin-bottom: 20px;
}

.recent-activity ul {
    list-style: none;
    padding: 0;
}

.quick-links {
    margin-bottom: 20px;
}

.quick-links button {
    background: #000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    margin-right: 10px;
    cursor: pointer;
}

.quick-links button:hover {
    background: #333;
}

.notifications,
.upcoming-events {
    margin-bottom: 20px;
}

.message-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.inbox,
.sent-messages,
.compose-message,
.search-messages {
    background: #f0f0f0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.inbox h3,
.sent-messages h3,
.compose-message h3,
.search-messages h3 {
    margin-bottom: 10px;
}

.inbox ul,
.sent-messages ul {
    list-style: none;
    padding: 0;
}

.message-header {
    display: flex;
    justify-content: space-between;
}

.subject {
    margin-top: 5px;
    font-weight: bold;
}

.compose-message form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.compose-message form label {
    font-weight: bold;
}

.compose-message form input,
.compose-message form textarea {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.compose-message form button {
    background: #000;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.compose-message form button:hover {
    background: #333;
}

.search-messages input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.project-container,
.task-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.project-list,
.task-list {
    background: #f0f0f0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.project-list h3,
.task-list h3 {
    margin-bottom: 10px;
}

.project-list ul,
.task-list ul {
    list-style: none;
    padding: 0;
}

.project-header,
.task-header {
    display: flex;
    justify-content: space-between;
}

.project-description,
.task-status {
    margin-top: 5px;
}

.add-project,
.add-task {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.add-project h3,
.add-task h3 {
    margin-bottom: 15px;
}

.add-project form,
.add-task form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.add-project form label,
.add-task form label {
    font-weight: bold;
}

.add-project form input,
.add-project form textarea,
.add-project form button,
.add-task form input,
.add-task form textarea,
.add-task form select,
.add-task form button {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.add-project form button,
.add-task form button {
    background: black;
    color: white;
    cursor: pointer;
    border: none;
    transition: background-color 0.3s ease;
}

.add-project form button:hover,
.add-task form button:hover {
    background: grey;
}

</style>


<script src="collaboration.js">
    document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        
        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');
        
        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});

document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');

        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});


document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');

        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});

const composeForm = document.getElementById('compose-form');
composeForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const recipient = document.getElementById('recipient').value;
    const subject = document.getElementById('subject').value;
    const messageBody = document.getElementById('message-body').value;

    // Example: Adding the composed message to the Sent Messages list
    const sentList = document.getElementById('sent-list');
    const newMessage = document.createElement('li');
    newMessage.innerHTML = `
        <div class="message-header">
            <span class="recipient">${recipient}</span>
            <span class="timestamp">${new Date().toLocaleDateString()}</span>
        </div>
        <div class="subject">${subject}</div>
    `;
    sentList.appendChild(newMessage);

    // Clear form fields
    composeForm.reset();
});

</script>
</html>
