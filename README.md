## LiveChat: Agent App Extension Example (PHP & Silex)

This is an example of [Agent App Extension](https://docs.livechatinc.com/agent-app-extension/).

### Set up the environment

```
git clone git@github.com:livechat/agent-app-sample-extension.git
cd agent-app-sample-extension
composer install
```

Your extension should be hosted over HTTPS.

### Turn on the extension

To turn on the extension for testing purposes, you to need create new app in your [Developers Console](https://developers.livechatinc.com/console/)

1. First, log into your LiveChat's Developer Console and go to Apps section.
2. Click on *New app* button to proceed.
3. We will leave naming the app to you but remember to choose the Web app as the type of your application. After that, click on Continue to create your new app.
4. Open your newly created app and proceed to Features section.
5. Put your extension URL (it would be `https://localhost:3333`) in Features > Agent App Extension section. To continue, save changes.
6. Go to Distribution tab and install the app on your LiveChat license.

Enjoy! :rocket:
