export async function onRequest(context) {

   const url = new URL(context.request.url)

   // Only apply on homepage
   if (url.pathname !== "/") {
      return context.next()
   }

   const country = context.request.headers.get("cf-ipcountry")
   const lang = context.request.headers.get("accept-language")

   // Polish visitors
   if (country === "PL" || (lang && lang.startsWith("pl"))) {

      const newRequest = new Request(new URL("/pl/index.html", context.request.url), context.request)
      return context.env.ASSETS.fetch(newRequest)
   }
   if (country === "SK" || (lang && lang.startsWith("sk"))) {

      const newRequest = new Request(new URL("/sk/index.html", context.request.url), context.request)
      return context.env.ASSETS.fetch(newRequest)
   }
   if (country === "CZ" || (lang && lang.startsWith("cz"))) {

      const newRequest = new Request(new URL("/sk/index.html", context.request.url), context.request)
      return context.env.ASSETS.fetch(newRequest)
   }

   // Default language
   const newRequest = new Request(new URL("/en/index.html", context.request.url), context.request)
   return context.env.ASSETS.fetch(newRequest)
}