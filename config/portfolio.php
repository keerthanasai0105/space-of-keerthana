<?php

/**
 * ============================================================
 *  PORTFOLIO CONFIGURATION
 *  Edit ONLY this file to update any content on the website.
 *  No need to touch any Blade view or Controller.
 * ============================================================
 */

return [

    // ─────────────────────────────────────────────
    //  PERSONAL INFO
    // ─────────────────────────────────────────────
    'personal' => [
        'name_first'  => 'Kopanathi',
        'name_last'   => 'Keerthana Sai',
        'initials'    => 'KS',
        'role'        => 'Software Trainee / AI & Data Science Graduate',
        'location'    => 'Visakhapatnam, India',
        'status'      => 'Available for opportunities',
        'bio'         => [
            'I\'m a <strong>B.Tech graduate in AI & Data Science</strong> from Vignan\'s Institute of Information Technology (CGPA: 8.88/10), currently working as a Software Trainee at Sails Software Solutions.',
            'My experience spans building <strong>speech diarization systems</strong> at L&T using SpeechBrain & Whisper, predicting industrial parameters at RINL with Random Forest, and now diving into <strong>PHP & Laravel</strong> backend development.',
            'I adapt fast, love tackling real-world problems with data, and thrive where <strong>AI meets practical software</strong>. When I\'m not coding, you\'ll find me lost in a novel or discovering new music.',
        ],
        'photo'       => null, // Set to '/images/keerthana.jpg' after adding your photo to public/images/
        'open_to_work'=> true,
    ],

    // ─────────────────────────────────────────────
    //  QUICK INFO CARDS (shown in About section)
    // ─────────────────────────────────────────────
    'info' => [
        ['key' => 'Location',     'value' => 'Andhra Pradesh, India'],
        ['key' => 'Degree',       'value' => 'B.Tech — AI & DS, 2025'],
        ['key' => 'Current Role', 'value' => 'Software Trainee'],
        ['key' => 'Languages',    'value' => 'Telugu · Hindi · English'],
        ['key' => 'Email',        'value' => 'k.keerthanasai2003@gmail.com'],
        ['key' => 'Interests',    'value' => 'Novels · Music · AI'],
    ],

    // ─────────────────────────────────────────────
    //  HERO STATS (3 numbers shown on hero section)
    // ─────────────────────────────────────────────
    'stats' => [
        ['number' => '4+',  'label' => 'Internships'],
        ['number' => '8.88','label' => 'CGPA'],
        ['number' => '5K+', 'label' => 'Data Points Analyzed'],
    ],

    // ─────────────────────────────────────────────
    //  CONTACT LINKS
    // ─────────────────────────────────────────────
    'contact' => [
        [
            'icon'  => '📧',
            'label' => 'Email',
            'value' => 'k.keerthanasai2003@gmail.com',
            'href'  => 'mailto:k.keerthanasai2003@gmail.com',
        ],
        [
            'icon'  => '🔗',
            'label' => 'LinkedIn',
            'value' => 'keerthanasai2003',
            'href'  => 'https://www.linkedin.com/in/keerthanasai2003',
        ],
        [
            'icon'  => '📞',
            'label' => 'Phone',
            'value' => '+91 98858 63963',
            'href'  => 'tel:+919885863963',
        ],
        // Add GitHub later:
        // ['icon' => '🐙', 'label' => 'GitHub', 'value' => 'github.com/yourhandle', 'href' => 'https://github.com/yourhandle'],
    ],

    // ─────────────────────────────────────────────
    //  SKILLS
    //  To add a new category: copy one block & add it to the array.
    //  To add a skill: just add a string to the 'items' array.
    // ─────────────────────────────────────────────
    'skills' => [
        [
            'icon'     => '⚡',
            'category' => 'Programming',
            'items'    => ['Python', 'Java', 'PHP', 'HTML', 'CSS'],
        ],
        [
            'icon'     => '🤖',
            'category' => 'AI / ML',
            'items'    => ['Machine Learning', 'Deep Learning', 'SpeechBrain', 'OpenAI Whisper', 'Scikit-learn'],
        ],
        [
            'icon'     => '🌐',
            'category' => 'Frameworks',
            'items'    => ['Laravel', 'Django', 'MVC Architecture'],
        ],
        [
            'icon'     => '📊',
            'category' => 'Tools & Databases',
            'items'    => ['Power BI', 'Tableau', 'MySQL', 'MS Excel'],
        ],
        [
            'icon'     => '🤝',
            'category' => 'Soft Skills',
            'items'    => ['Team Management', 'Presentation', 'Storytelling', 'Problem Solving'],
        ],
        [
            'icon'     => '📜',
            'category' => 'Certifications',
            'items'    => ['Python', 'HTML/CSS', 'Tableau', 'Cisco CCNA (1,2)', 'Cyber Security'],
        ],
    ],

    // ─────────────────────────────────────────────
    //  EXPERIENCE
    //  Most recent first. To add a new job: copy one block.
    // ─────────────────────────────────────────────
    'experience' => [
        [
            'period'  => 'Jan 2026 — Present',
            'company' => 'Sails Software Solutions',
            'role'    => 'Software Trainee',
            'points'  => [
                'Trained in Java, then successfully transitioned to PHP and Laravel tech stack.',
                'Implemented Laravel MVC architecture — migrations, controllers, and authentication systems.',
                'Actively contributing to backend development with hands-on production experience.',
            ],
        ],
        [
            'period'  => 'Jan 2025 — Jul 2025',
            'company' => 'Larsen & Toubro',
            'role'    => 'AI & Data Analytics Intern',
            'points'  => [
                'Analyzed 5,000+ survey responses across 31 departments using statistical methods and visualizations.',
                'Built multi-speaker speech diarization & transcription system using SpeechBrain + Whisper.',
                'Automated end-to-end Python audio pipeline delivering speaker-tagged transcripts in real-time.',
            ],
        ],
        [
            'period'  => 'Apr 2024 — May 2024',
            'company' => 'Cognifyz',
            'role'    => 'Data Science Intern',
            'points'  => [
                'Cleaned and transformed restaurant datasets for statistical and visual analysis.',
                'Conducted EDA to uncover patterns in location data and customer behavior.',
            ],
        ],
        [
            'period'  => 'May 2023 — Jun 2023',
            'company' => 'RINL — VSP',
            'role'    => 'Project Intern',
            'points'  => [
                'Led ML project predicting Blast Furnace parameters from large-scale industrial datasets.',
                'Applied data cleaning, feature engineering, and visualization for pattern discovery.',
                'Managed a small team ensuring on-time delivery and thorough documentation.',
            ],
        ],
    ],

    // ─────────────────────────────────────────────
    //  PROJECTS
    //  To add a new project: copy one block & append it.
    //  'link' is optional — remove the key if no link.
    // ─────────────────────────────────────────────
    'projects' => [
        [
            'name'  => 'Speech Diarization & Transcription',
            'desc'  => 'Python pipeline separating multi-speaker audio using SpeechBrain embeddings, then transcribing each speaker with OpenAI Whisper. Handles 30-min recordings with speaker-tagged output.',
            'stack' => ['Python', 'SpeechBrain', 'OpenAI Whisper', 'Audio ML'],
            // 'link' => 'https://github.com/yourhandle/speech-diarization',
        ],
        [
            'name'  => 'ML Stack Temperature Prediction',
            'desc'  => 'Random Forest Classifier trained on large-scale industrial sensor data from RINL blast furnace operations to predict critical stack temperature parameters.',
            'stack' => ['Python', 'Random Forest', 'Scikit-learn', 'Feature Engineering'],
            // 'link' => 'https://github.com/yourhandle/stack-temp',
        ],
        [
            'name'  => 'Ecommerce Sales Dashboard',
            'desc'  => 'Interactive Power BI dashboard with donut, pie, and bar charts visualizing profit trends and KPIs, enabling data-driven decisions across the eCommerce department.',
            'stack' => ['Power BI', 'Data Visualization', 'DAX'],
        ],
        [
            'name'  => 'Online Voting System',
            'desc'  => 'Full-stack web voting application with multi-page HTML/CSS frontend and PHP + MySQL backend for secure vote storage, retrieval, and result computation.',
            'stack' => ['PHP', 'MySQL', 'HTML', 'CSS'],
        ],
    ],

];
