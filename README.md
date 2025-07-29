🧠 LLaMA Bot — WordPress Plugin
LLaMA Bot is a powerful AI chatbot plugin for WordPress that captures leads, tracks analytics, and enables businesses to customize chatbot behavior and monitor performance through a sleek admin dashboard.

🚀 Features
✅ AI-powered chatbot UI (public-facing)

📥 Lead capture (name + email)

📊 Admin dashboard with:

Messages per user

CTA conversion tracking

Weekly leads captured

Graph of chat activity

💬 Short-term memory (last 5 messages)

✍️ Custom AI personality settings (company name, tone, values)

📤 Export chat logs to CSV

🎯 "Book a Call" CTA button

🗂️ File Structure

llama-bot/
│
├── llama-bot.php               # Main plugin file
├── style.css                   # Public styles (chat box)
├── public-chat.js              # Frontend logic for chatbot
│
├── admin/
│   ├── dashboard.php           # Main dashboard view
│   ├── chat-history.php        # View logged chat messages
│   └── captured-leads.php      # View all captured leads
│
├── includes/
│   ├── lead-capture.php        # Handles AJAX lead submission
│   └── analytics-logger.php    # Logs CTA clicks & message counts
📦 Installation

Drop the entire llama-bot/ folder into your wp-content/plugins/ directory.

Activate LLaMA Bot from the WordPress Plugins page.

Add the shortcode [llama_bot] to any page or post to display the chatbot.

🛠️ Admin Setup
Access the LLaMA Dashboard via:

WordPress Admin → LLaMA Dashboard

From there, you can:

See total engagement, conversion rates, and captured leads.

Customize the bot’s tone and company info.

View chat history and export logs.

⚙️ Configuration
Customize bot behavior via the admin dashboard fields:

Company Name

Company Values

Bot Tone (helpful, bold, sarcastic)

🧪 API Endpoint
Make sure your backend FastAPI server is running at:

bash
http://localhost:8000/client/update
This is where prompts are sent and responses are received.

📈 Analytics
Tracked metrics:

Total messages per user

CTA clicks ("Book a Call" interactions)

Leads captured this week

Conversion rate from chat to CTA

📤 Exporting Data
Click Export Logs to CSV in the dashboard to save all chatbot logs locally as:
llama_logs_export.csv

🧠 Built By Desert Forged AI
Powering smart conversations and data-driven business websites.
