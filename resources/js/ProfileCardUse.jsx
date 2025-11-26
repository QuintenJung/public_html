import React from 'react';
import { createRoot } from 'react-dom/client';
import ProfileCard from './components/ProfileCard';


let a = document.getElementsByClassName('profileCard')
for (let i = 0; i < a.length; i++) {
    const rootElement = a[i];
        if (rootElement) {
        const root = createRoot(rootElement);

        // Haal de data uit de Blade div
        const props = {
            name: rootElement.dataset.name,
            title: rootElement.dataset.title,
            handle: rootElement.dataset.handle,
            status: rootElement.dataset.status,
            contactText: rootElement.dataset.contactText,
            avatarUrl: rootElement.dataset.avatarUrl,
            iconUrl: rootElement.dataset.iconUrl,
            showUserInfo: rootElement.dataset.showUserInfo,
            enableTilt: true,
            enableMobileTilt: false,
            onContactClick: () => console.log('Contact clicked')
        };

        root.render(<ProfileCard {...props} />);
    }

}


