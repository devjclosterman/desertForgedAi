console.log("✅ bot.js loaded!");
console.log("🚀 Sending test prompt to FastAPI...");

// ✅ Add this block
fetch("https://llama-backend-y9dx.onrender.com/chat", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    "x-api-key": "kKe_shlLl2UhGQcLVQcQABeD4qPsErZ28EGExXEikCU"
  },
  body: JSON.stringify({
    prompt: "Hello",
    userId: "user_123"
  })
})
.then(res => res.json())
.then(data => {
  console.log("🤖 Bot says:", data.reply);
})
.catch(err => {
  console.error("❌ Bot error:", err);
});

