## LiveChat: Agent App Extension Example (Symfony & Silex)

This is an example of [Agent App Extension](https://docs.livechatinc.com/agent-app-extension/).

### Set up the environment

```
git clone git@github.com:livechat/agent-app-sample-extension.git
cd agent-app-sample-extension
composer install
```

Your extension should be hosted over HTTPS.

### Turn on the extension

Navigate to https://my.livechatinc.com/ and paste the following snippet in the developers console.

```js
App.collections.Integrations.add({
  id: 'sandbox',
  url: 'https://your_extension_url'
})
```

Enjoy! :rocket:
