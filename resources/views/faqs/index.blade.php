<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

<style>
    .faq-container {
        margin: 5% auto;
        max-width: 800px;
    }

    .faq-question {
        background-color: #e6f2e6;
        border: 1px solid #cde0cd;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    /* Chatbot styles */
    #chatbot-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        background-color: #0c7d1f;
        color: white;
        border: none;
        font-size: 24px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    #chatbot-window {
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 300px;
        height: 400px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        display: none;
        flex-direction: column;
        overflow: hidden;
        z-index: 1000;
    }

    #chatbot-header {
        background-color: #0c7d1f;
        color: white;
        padding: 10px;
        font-weight: bold;
    }

    #chatbot-messages {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
        font-size: 14px;
    }

    #chatbot-input {
        display: flex;
        border-top: 1px solid #ccc;
    }

    #chatbot-input input {
        flex: 1;
        border: none;
        padding: 10px;
    }

    #chatbot-input button {
        border: none;
        background-color: #0c7d1f;
        color: white;
        padding: 10px 15px;
    }
</style>

<x-app-layout>
    <div class="faq-container card p-4 shadow-lg">
        <h3 class="mb-4">Frequently Asked Questions</h3>

        <div class="accordion" id="faqAccordion">

            <!-- Question 1 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne">
                        How can I submit my complaint?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can submit your complaint by visiting our website and filling in the complaint form.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        What information do I need to submit my complaint?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Provide your name, email, issue category, and detailed description of your complaint.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree">
                        Will I receive a notification email after submitting my complaint?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, once your complaint is submitted successfully, a confirmation email will be sent to the
                        email address you provided.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour">
                        What is the expected response time for the submitted complaint?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Complaints are typically reviewed within 3 to 5 business days. You will be updated via email or
                        through your dashboard.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive">
                        How can I track the progress of the complaint?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Log in to your account and navigate to the "Complaint" section. All your complaints and their
                        statuses will be listed there.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix">
                        Can I remain anonymous when submitting my complaint?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you have the option to submit your complaint anonymously. However, we recommend providing
                        contact information for faster resolution.
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven">
                        What should I do if I don’t receive any response?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        If you haven't received a response within 7 business days, please contact our support team or
                        use the chatbot for assistance.
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="accordion-item faq-question">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight">
                        Can I edit or delete my complaint after submitting it?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can edit or withdraw your complaint from your dashboard if it hasn’t been processed yet.
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Chatbot Button -->
    <button id="chatbot-btn" title="Chat with CEFS Help Buddy"><i class="fas fa-comment-alt"></i></button>

    <!-- Chatbot Window -->
    <div id="chatbot-window" class="d-flex flex-column">
        <div id="chatbot-header">CEFS Help Buddy</div>
        <div id="chatbot-messages">
            <div><strong>Bot:</strong> Hi there! How can I assist you?</div>
        </div>
        <div id="chatbot-input">
            <input type="text" id="userInput" placeholder="Type your message..." />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        const chatbotBtn = document.getElementById('chatbot-btn');
        const chatbotWindow = document.getElementById('chatbot-window');
        const chatbotMessages = document.getElementById('chatbot-messages');
        const userInput = document.getElementById('userInput');
    
        // Toggle chatbot window visibility
        chatbotBtn.addEventListener('click', () => {
            chatbotWindow.style.display = chatbotWindow.style.display === 'flex' ? 'none' : 'flex';
        });
    
        // Send message on button click
        function sendMessage() {
            const msg = userInput.value.trim();
            if (!msg) return;
    
            appendMessage('You', msg);
            userInput.value = '';
    
            // Auto-reply based on simple keywords
            const response = getBotResponse(msg.toLowerCase());
            setTimeout(() => appendMessage('Bot', response), 500);
        }
    
        // Allow Enter key to send message
        userInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    
        // Append message to chat
        function appendMessage(sender, message) {
            const msgElement = document.createElement('div');
            msgElement.innerHTML = `<strong>${sender}:</strong> ${message}`;
            chatbotMessages.appendChild(msgElement);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }
    
        // Simple keyword-based bot responses
        function getBotResponse(input) {
            if (input.includes('submit')) return 'To submit a complaint, go to the Complaint section and fill the form.';
            if (input.includes('track')) return 'You can track complaints in your Dashboard under Complaint Status.';
            if (input.includes('anonymous')) return 'Yes, you can submit complaints anonymously.';
            if (input.includes('edit')) return 'You can edit a complaint before it is processed.';
            if (input.includes('response')) return 'Complaints are usually reviewed within 3 to 5 business days.';
            return 'Thanks for your message. A team member will get back to you soon!';
        }
    </script>
</x-app-layout>