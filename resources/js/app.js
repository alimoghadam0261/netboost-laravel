// app.js
import './bootstrap';




// بعد از بارگذاری صفحه یا ناوبری Livewire، تگ canonical رو آپدیت کن
document.addEventListener('DOMContentLoaded', () => {
    updateCanonical();
});

document.addEventListener('livewire:navigated', () => {
    updateCanonical();
});

function updateCanonical() {
    let canonicalTag = document.querySelector('link[rel="canonical"]');
    if (canonicalTag) {
        canonicalTag.setAttribute('href', window.location.href);
    } else {
        canonicalTag = document.createElement('link');
        canonicalTag.setAttribute('rel', 'canonical');
        canonicalTag.setAttribute('href', window.location.href);
        document.head.appendChild(canonicalTag);
    }
}









// ==================== ثبت سرویس ورکر ====================
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js',{ scope: '/'})
        .then(registration => {
            console.log('ServiceWorker registered');
            return registration.pushManager.getSubscription()
                .then(subscription => subscription || subscribeUser(registration));
        })
        .catch(err => console.log('ServiceWorker registration failed:', err));
}

// ==================== ثبت کاربر برای پوش نوتیفیکیشن ====================
// function subscribeUser(registration) {
//     const vapidPublicKey = 'VAPID_PUBLIC_KEY'; // جایگزین کنید با کلید عمومی شما
//
//     return registration.pushManager.subscribe({
//         userVisibleOnly: true,
//         applicationServerKey: urlBase64ToUint8Array(vapidPublicKey)
//     })
//         .then(subscription => {
//             // ارسال سابسکریپشن به سرور (با Axios یا Fetch)
//             return fetch('/api/save-subscription', {
//                 method: 'POST',
//                 body: JSON.stringify(subscription),
//                 headers: {
//                     'Content-Type': 'application/json'
//                 }
//             });
//         });
// }

// ==================== تبدیل کلید VAPID ====================
// function urlBase64ToUint8Array(base64String) {
//     const padding = '='.repeat((4 - base64String.length % 4) % 4);
//     const base64 = (base64String + padding)
//         .replace(/-/g, '+')
//         .replace(/_/g, '/');
//
//     const rawData = window.atob(base64);
//     const outputArray = new Uint8Array(rawData.length);
//
//     for (let i = 0; i < rawData.length; ++i) {
//         outputArray[i] = rawData.charCodeAt(i);
//     }
//     return outputArray;
// }

// ==================== مدیریت تم تاریک ====================
if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}
