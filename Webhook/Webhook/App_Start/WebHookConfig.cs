




using System.Web.Http;

namespace Webhook
{
    public static class WebHookConfig
    {
        public static void Register(HttpConfiguration config)
        {

			config.InitializeReceiveDropboxWebHooks();

        }
    }
}
