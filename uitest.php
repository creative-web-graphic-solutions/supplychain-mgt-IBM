<!doctype html>
<html lang="en">
<body>
<script>
  window.watsonAssistantChatOptions = {
   integrationID: "6604e97a-f00b-4645-a306-59813121b933", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "7197268a-6bc0-4ac3-bfa2-31d326a908e0", // The ID of your service instance.
    onLoad: function(instance) {
      instance.render();
      
      // You can add any condition you want here to decide what content you want to display on the home screen. You
      // can also turn the home screen off or on here.
      if (window.location.search.includes('home-screen-tutorial')) {
        instance.updateHomeScreenConfig({
          is_on: true,
          greeting: 'Welcome! Please ask us a question about the home screen.',
          starters: {
            is_on: true,
            buttons: [
              {
                label: 'Turn home screen off',
              },
              {
                label: 'Add conversation starters',
              },
              {
                label: 'Add custom content',
              },
            ],
          },
        });
      }
    }
  };

  setTimeout(function(){const t=document.createElement('script');t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";document.head.appendChild(t);});
</script>
</body>
</html>