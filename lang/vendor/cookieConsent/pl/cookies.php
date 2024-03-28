<?php
return [
    'title' => 'Używamy ciasteczek',
    'intro' => 'Ta strona używa ciasteczek, aby poprawić ogólne doświadczenie użytkownika.',
    'link' => 'Zapoznaj się z naszą <a href=":url">Polityką Ciasteczek</a> po więcej informacji.',

    'essentials' => 'Tylko niezbędne',
    'all' => 'Zaakceptuj wszystkie',
    'customize' => 'Dostosuj',
    'manage' => 'Zarządzaj ciasteczkami',
    'details' => [
        'more' => 'Więcej szczegółów',
        'less' => 'Mniej szczegółów',
    ],
    'save' => 'Zapisz ustawienia',

    'categories' => [
        'essentials' => [
            'title' => 'Ciasteczka niezbędne',
            'description' => 'Są ciasteczka, które musimy włączyć, aby pewne strony internetowe mogły funkcjonować. Z tego powodu nie wymagają Twojej zgody.',
        ],
        'analytics' => [
            'title' => 'Ciasteczka analityczne',
            'description' => 'Używamy ich do wewnętrznych badań nad tym, jak możemy poprawić serwis, który oferujemy wszystkim naszym użytkownikom. Te ciasteczka oceniają, jak wchodzisz w interakcję z naszą stroną internetową.',
        ],
        'optional' => [
            'title' => 'Ciasteczka opcjonalne',
            'description' => 'Te ciasteczka umożliwiają funkcje, które mogą poprawić Twoje doświadczenie użytkownika, ale ich brak nie wpłynie na Twoją możliwość przeglądania naszej strony internetowej.',
        ],
    ],

    'defaults' => [
        'consent' => 'Używane do przechowywania preferencji użytkownika dotyczących zgody na ciasteczka.',
        'session' => 'Używane do identyfikacji sesji przeglądania użytkownika.',
        'csrf' => 'Używane do zabezpieczania zarówno użytkownika, jak i naszej strony przed atakami typu cross-site request forgery.',
        '_ga' => 'Główne ciasteczko używane przez Google Analytics, umożliwia usłudze rozróżnienie jednego odwiedzającego od drugiego.',
        '_ga_ID' => 'Używane przez Google Analytics do utrzymania stanu sesji.',
        '_gid' => 'Używane przez Google Analytics do identyfikacji użytkownika.',
        '_gat' => 'Używane przez Google Analytics do ograniczenia liczby żądań.',
    ],
];
