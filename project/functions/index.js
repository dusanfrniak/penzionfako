// functions/index.js

export async function onRequest(context) {
   const url = new URL(context.request.url);

   // return immediatelly 
   return context.next(); // let Cloudflare Pages serve static files directly

   // Only handle the homepage
   if (url.pathname !== "/") {
      return context.next(); // let Cloudflare Pages serve static files directly
   }

   // Detect visitor country and browser language
   const country = context.request.headers.get("cf-ipcountry") || "";
   const acceptLang = context.request.headers.get("accept-language") || "";

   // Default URLs for languages
   const defaultLang = "/en/";
   const polishLang = "/pl/";
   const slovakLang = "/sk/";

   // Check for Polish
   if (country === "PL" || acceptLang.startsWith("pl")) {
      return Response.redirect(new URL(polishLang, context.request.url), 302);
   }

   // Check for Slovak
   if (country === "SK" || acceptLang.startsWith("sk")) {
      return Response.redirect(new URL(slovakLang, context.request.url), 302);
   }

   // Check for Slovak
   if (country === "CZ" || acceptLang.startsWith("cz")) {
      return Response.redirect(new URL(slovakLang, context.request.url), 302);
   }

   // Default language
   return Response.redirect(new URL(defaultLang, context.request.url), 302);
}