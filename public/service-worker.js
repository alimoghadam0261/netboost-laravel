    // // service-worker.js
    //
    // const CACHE_NAME = 'netboost-v2';
    // const OFFLINE_URL = '/offline.html';
    // const CACHE_ASSETS = [
    //     '/',
    //     '/offline.html',
    //     '/manifest.json',
    //
    //     '/build/assets/*.css',
    //     '/build/assets/*.js',
    //
    //     // Icons
    //     '/img/icon/android-chrome-192x192.png',
    //     '/img/icon/android-chrome-512x512.png'
    // ];
    //
    // // ==================== نصب و کش اولیه ====================
    // self.addEventListener('install', (event) => {
    //     event.waitUntil(
    //         caches.open(CACHE_NAME)
    //             .then(cache => cache.addAll(CACHE_ASSETS))
    //             .then(() => self.skipWaiting())
    //     );
    // });
    //
    // // ==================== فعال‌سازی و حذف کش قدیمی ====================
    // self.addEventListener('activate', (event) => {
    //     event.waitUntil(
    //         caches.keys().then(cacheNames => {
    //             return Promise.all(
    //                 cacheNames.map(cache => {
    //                     if (cache !== CACHE_NAME) return caches.delete(cache);
    //                 })
    //             );
    //         }).then(() => self.clients.claim())
    //     );
    // });
    //
    // // ==================== مدیریت درخواست‌ها ====================
    // // service-worker.js
    // self.addEventListener('fetch', (event) => {
    //     // برای درخواست‌های HTML
    //     if (event.request.mode === 'navigate') {
    //         event.respondWith(
    //             fetch(event.request)
    //                 .catch(async () => {
    //                     const cache = await caches.open(CACHE_NAME);
    //                     return cache.match(OFFLINE_URL) || Response.error();
    //                 })
    //         );
    //     }
    //     // برای سایر منابع (CSS, JS, تصاویر)
    //     else {
    //         event.respondWith(
    //             caches.match(event.request)
    //                 .then(cachedResponse => {
    //                     return cachedResponse || fetch(event.request)
    //                         .then(networkResponse => {
    //                             const clonedResponse = networkResponse.clone();
    //                             caches.open(CACHE_NAME).then(cache => {
    //                                 cache.put(event.request, clonedResponse);
    //                             });
    //                             return networkResponse;
    //                         })
    //                         .catch(() => {
    //                             // اگر نوع فایل html بود offline.html را نشان بده
    //                             if (event.request.headers.get('accept').includes('text/html')) {
    //                                 return caches.match(OFFLINE_URL);
    //                             }
    //                             return Response.error();
    //                         });
    //                 })
    //         );
    //     }
    // });
    //
    // // ==================== مدیریت پوش نوتیفیکیشن ====================
    // // self.addEventListener('push', (event) => {
    // //     const data = event.data.json();
    // //     const options = {
    // //         body: data.body,
    // //         icon: '/img/icon/android-chrome-192x192.png',
    // //         badge: '/img/icon/android-chrome-192x192.png',
    // //         vibrate: [200, 100, 200],
    // //         data: {
    // //             url: data.url
    // //         }
    // //     };
    // //
    // //     event.waitUntil(
    // //         self.registration.showNotification(data.title, options)
    // //     );
    // // });
    // //
    // // self.addEventListener('notificationclick', (event) => {
    // //     event.notification.close();
    // //     event.waitUntil(
    // //         clients.openWindow(event.notification.data.url)
    // //     );
    // // });
