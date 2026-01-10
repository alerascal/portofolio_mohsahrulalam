<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Moh. Sahrul Alamsyah - Portfolio</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap");

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root {
                --primary: #00ff88;
                --secondary: #0099ff;
                --accent: #ff0088;
                --dark: #0a0e27;
                --darker: #050814;
                --light: #ffffff;
            }

            body {
                font-family: "Space Grotesk", sans-serif;
                background: var(--darker);
                color: var(--light);
                overflow-x: hidden;
                line-height: 1.6;
            }

            /* Animated Background - Optimized for Mobile */
            .animated-bg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
                background: radial-gradient(
                    ellipse at top,
                    #0a1628 0%,
                    #050814 100%
                );
            }

            .stars {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .star {
                position: absolute;
                width: 2px;
                height: 2px;
                background: white;
                border-radius: 50%;
                animation: twinkle 3s infinite;
            }

            @keyframes twinkle {
                0%,
                100% {
                    opacity: 0.3;
                    transform: scale(1);
                }
                50% {
                    opacity: 1;
                    transform: scale(1.5);
                }
            }

            .floating-shapes {
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }

            .shape {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.12;
                animation: float-shape 25s infinite ease-in-out;
                will-change: transform;
            }

            .shape1 {
                width: clamp(300px, 50vw, 600px);
                height: clamp(300px, 50vw, 600px);
                background: var(--primary);
                top: -20%;
                left: -10%;
                animation-delay: 0s;
            }

            .shape2 {
                width: clamp(250px, 40vw, 500px);
                height: clamp(250px, 40vw, 500px);
                background: var(--secondary);
                bottom: -15%;
                right: -8%;
                animation-delay: -7s;
            }

            .shape3 {
                width: clamp(200px, 35vw, 400px);
                height: clamp(200px, 35vw, 400px);
                background: var(--accent);
                top: 50%;
                right: 5%;
                animation-delay: -14s;
            }

            @keyframes float-shape {
                0%,
                100% {
                    transform: translate(0, 0) rotate(0deg);
                }
                33% {
                    transform: translate(50px, -50px) rotate(120deg);
                }
                66% {
                    transform: translate(-50px, 50px) rotate(240deg);
                }
            }

            /* Container */
            .container {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 clamp(16px, 4vw, 40px);
                position: relative;
                z-index: 1;
            }

            /* Navigation - Mobile First */
            nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                padding: clamp(15px, 3vw, 25px) 0;
                background: rgba(10, 14, 39, 0.95);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                z-index: 100;
                animation: slideDown 0.8s ease;
            }

            @keyframes slideDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .nav-content {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 clamp(16px, 4vw, 40px);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                font-size: clamp(20px, 5vw, 28px);
                font-weight: 700;
                background: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                z-index: 101;
            }

            .nav-links {
                display: none;
                gap: clamp(20px, 3vw, 40px);
                list-style: none;
            }

            .nav-links a {
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
                font-weight: 500;
                font-size: clamp(14px, 2vw, 16px);
                transition: all 0.3s ease;
                position: relative;
                white-space: nowrap;
            }

            .nav-links a::after {
                content: "";
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 0;
                height: 2px;
                background: var(--primary);
                transition: width 0.3s ease;
            }

            .nav-links a:hover {
                color: var(--primary);
            }

            .nav-links a:hover::after {
                width: 100%;
            }

            /* Show nav links on tablet and up */
            @media (min-width: 768px) {
                .nav-links {
                    display: flex;
                }
            }

            /* Hero Section - Fully Responsive */
            .hero {
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: clamp(100px, 15vh, 140px) 0 clamp(40px, 8vh, 80px);
            }

            .hero-content {
                display: grid;
                grid-template-columns: 1fr;
                gap: clamp(40px, 8vw, 80px);
                align-items: center;
                width: 100%;
            }

            @media (min-width: 1024px) {
                .hero-content {
                    grid-template-columns: 1fr 1fr;
                }
            }

            .hero-text {
                text-align: center;
            }

            @media (min-width: 1024px) {
                .hero-text {
                    text-align: left;
                }
            }

            .hero-text h1 {
                font-size: clamp(32px, 8vw, 72px);
                font-weight: 700;
                line-height: 1.1;
                margin-bottom: clamp(15px, 3vh, 20px);
                animation: fadeInUp 1s ease 0.2s both;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .gradient-text {
                background: linear-gradient(
                    135deg,
                    var(--primary) 0%,
                    var(--secondary) 50%,
                    var(--accent) 100%
                );
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                background-size: 200% 200%;
                animation: gradient-shift 3s ease infinite;
            }

            @keyframes gradient-shift {
                0%,
                100% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
            }

            .typing-container {
                min-height: clamp(30px, 6vh, 50px);
                margin-bottom: clamp(20px, 4vh, 30px);
                animation: fadeInUp 1s ease 0.4s both;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            @media (min-width: 1024px) {
                .typing-container {
                    justify-content: flex-start;
                }
            }

            .typing-text {
                font-size: clamp(16px, 4vw, 28px);
                color: var(--primary);
                font-weight: 600;
                border-right: 3px solid var(--primary);
                white-space: nowrap;
                overflow: hidden;
                display: inline-block;
                animation: typing 3.5s steps(40) infinite,
                    blink 0.75s step-end infinite;
            }

            @keyframes typing {
                0%,
                90%,
                100% {
                    width: 0;
                }
                30%,
                60% {
                    width: 100%;
                }
            }

            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }

            .hero-description {
                font-size: clamp(15px, 2.5vw, 18px);
                line-height: 1.8;
                color: rgba(255, 255, 255, 0.7);
                margin-bottom: clamp(25px, 5vh, 40px);
                animation: fadeInUp 1s ease 0.6s both;
            }

            .hero-buttons {
                display: flex;
                flex-wrap: wrap;
                gap: clamp(12px, 3vw, 20px);
                animation: fadeInUp 1s ease 0.8s both;
                justify-content: center;
            }

            @media (min-width: 1024px) {
                .hero-buttons {
                    justify-content: flex-start;
                }
            }

            .btn {
                padding: clamp(12px, 2.5vw, 16px) clamp(24px, 5vw, 40px);
                border-radius: 50px;
                font-weight: 600;
                font-size: clamp(14px, 2vw, 16px);
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
                white-space: nowrap;
                min-width: clamp(140px, 20vw, 180px);
            }

            .btn-primary {
                background: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );
                color: var(--dark);
                box-shadow: 0 10px 40px rgba(0, 255, 136, 0.3);
            }

            .btn-primary::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    135deg,
                    var(--secondary),
                    var(--primary)
                );
                transition: left 0.5s ease;
                z-index: -1;
            }

            .btn-primary:hover::before {
                left: 0;
            }

            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 15px 50px rgba(0, 255, 136, 0.5);
            }

            .btn-secondary {
                background: transparent;
                color: var(--light);
                border: 2px solid rgba(255, 255, 255, 0.2);
            }

            .btn-secondary:hover {
                border-color: var(--primary);
                color: var(--primary);
                transform: translateY(-3px);
            }

            /* Hero Image - Mobile Optimized */
            .hero-image {
                position: relative;
                animation: fadeInUp 1s ease 0.4s both;
                display: flex;
                justify-content: center;
            }

            .image-wrapper {
                position: relative;
                width: clamp(220px, 70vw, 450px);
                height: clamp(220px, 70vw, 450px);
                margin: 0 auto;
            }

            .glow-ring {
                position: absolute;
                inset: -15px;
                border-radius: 50%;
                background: conic-gradient(
                    from 0deg,
                    var(--primary),
                    var(--secondary),
                    var(--accent),
                    var(--primary)
                );
                animation: rotate 4s linear infinite;
                filter: blur(clamp(15px, 3vw, 25px));
                opacity: 0.7;
            }

            @keyframes rotate {
                100% {
                    transform: rotate(360deg);
                }
            }

            .image-container {
                position: relative;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                overflow: hidden;
                border: clamp(3px, 1vw, 5px) solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center 20%;
                display: block;
                transition: transform 0.5s ease;
            }

            .image-container:hover img {
                transform: scale(1.1);
            }

            .floating-icons {
                position: absolute;
                width: 100%;
                height: 100%;
                display: none;
            }

            @media (min-width: 640px) {
                .floating-icons {
                    display: block;
                }
            }

            .float-icon {
                position: absolute;
                width: clamp(40px, 8vw, 60px);
                height: clamp(40px, 8vw, 60px);
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: clamp(16px, 4vw, 24px);
                animation: float-icon 3s ease-in-out infinite;
            }

            @keyframes float-icon {
                0%,
                100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-20px);
                }
            }

            .float-icon:nth-child(1) {
                top: 10%;
                left: -8%;
                animation-delay: 0s;
                color: var(--primary);
            }

            .float-icon:nth-child(2) {
                top: 30%;
                right: -8%;
                animation-delay: 1s;
                color: var(--secondary);
            }

            .float-icon:nth-child(3) {
                bottom: 20%;
                left: -5%;
                animation-delay: 2s;
                color: var(--accent);
            }

            .float-icon:nth-child(4) {
                bottom: 10%;
                right: -5%;
                animation-delay: 1.5s;
                color: var(--primary);
            }

            /* Contact Info - Responsive Grid */
            .contact-info {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: clamp(12px, 3vw, 20px);
                margin-top: clamp(30px, 6vh, 40px);
                animation: fadeInUp 1s ease 1s both;
            }

            @media (max-width: 480px) {
                .contact-info {
                    grid-template-columns: 1fr;
                }
            }

            .contact-item {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: clamp(12px, 2.5vw, 15px) clamp(16px, 3vw, 20px);
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 15px;
                transition: all 0.3s ease;
            }

            .contact-item:hover {
                background: rgba(255, 255, 255, 0.05);
                border-color: var(--primary);
                transform: translateX(5px);
            }

            .contact-item i {
                color: var(--primary);
                font-size: clamp(16px, 3vw, 18px);
                flex-shrink: 0;
            }

            .contact-item span {
                font-size: clamp(12px, 2vw, 14px);
                color: rgba(255, 255, 255, 0.8);
                word-break: break-word;
                line-height: 1.4;
            }

            /* Section Styles - Mobile Optimized */
            section {
                padding: clamp(50px, 12vw, 100px) 0;
                opacity: 0;
                animation: fadeInUp 1s ease forwards;
            }

            section:nth-child(even) {
                animation-delay: 0.2s;
            }

            .section-header {
                text-align: center;
                margin-bottom: clamp(40px, 8vw, 80px);
            }

            .section-tag {
                display: inline-block;
                padding: clamp(6px, 1.5vw, 8px) clamp(16px, 3vw, 20px);
                background: rgba(0, 255, 136, 0.1);
                border: 1px solid var(--primary);
                border-radius: 50px;
                color: var(--primary);
                font-size: clamp(11px, 2vw, 14px);
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: clamp(1px, 0.3vw, 2px);
                margin-bottom: clamp(15px, 3vh, 20px);
            }

            .section-title {
                font-size: clamp(28px, 6vw, 48px);
                font-weight: 700;
                margin-bottom: clamp(15px, 3vh, 20px);
                line-height: 1.2;
            }

            .section-description {
                font-size: clamp(14px, 2.5vw, 18px);
                color: rgba(255, 255, 255, 0.6);
                max-width: 600px;
                margin: 0 auto;
                padding: 0 clamp(16px, 4vw, 20px);
                line-height: 1.6;
            }

            /* Skills Grid - Fully Responsive */
            .skills-grid {
                display: grid;
                grid-template-columns: repeat(
                    auto-fit,
                    minmax(min(100%, 280px), 1fr)
                );
                gap: clamp(20px, 4vw, 30px);
            }

            .skill-card {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: clamp(20px, 4vw, 25px);
                padding: clamp(25px, 5vw, 40px);
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
            }

            .skill-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.5s ease;
            }

            .skill-card:hover {
                transform: translateY(-10px);
                background: rgba(255, 255, 255, 0.05);
                border-color: var(--primary);
                box-shadow: 0 20px 60px rgba(0, 255, 136, 0.2);
            }

            .skill-card:hover::before {
                transform: scaleX(1);
            }

            .skill-icon {
                width: clamp(60px, 12vw, 70px);
                height: clamp(60px, 12vw, 70px);
                background: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );
                border-radius: clamp(15px, 3vw, 20px);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: clamp(24px, 5vw, 32px);
                margin-bottom: clamp(20px, 4vh, 25px);
                animation: pulse 2s ease-in-out infinite;
            }

            @keyframes pulse {
                0%,
                100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.05);
                }
            }

            .skill-card h3 {
                font-size: clamp(18px, 4vw, 24px);
                margin-bottom: clamp(15px, 3vh, 20px);
                color: var(--light);
            }

            .skill-list {
                list-style: none;
            }

            .skill-list li {
                padding: clamp(8px, 2vh, 10px) 0;
                color: rgba(255, 255, 255, 0.7);
                font-size: clamp(14px, 2.2vw, 16px);
                display: flex;
                align-items: center;
                gap: 10px;
                transition: all 0.3s ease;
            }

            .skill-list li::before {
                content: "▹";
                color: var(--primary);
                font-size: clamp(18px, 3vw, 20px);
                transition: transform 0.3s ease;
                flex-shrink: 0;
            }

            .skill-list li:hover {
                color: var(--primary);
                padding-left: 10px;
            }

            .skill-list li:hover::before {
                transform: translateX(5px);
            }

            /* Timeline - Mobile First */
            .timeline {
                max-width: 900px;
                margin: 0 auto;
                position: relative;
                padding: 0 clamp(16px, 4vw, 20px);
            }

            .timeline::before {
                content: "";
                position: absolute;
                left: clamp(16px, 4vw, 20px);
                top: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(
                    180deg,
                    var(--primary),
                    var(--secondary),
                    var(--accent),
                    var(--primary)
                );
                background-size: 100% 300%;
                animation: timelineFlow 6s linear infinite;
            }

            @keyframes timelineFlow {
                0% {
                    background-position: 0% 0%;
                }
                100% {
                    background-position: 0% 100%;
                }
            }

            @media (min-width: 768px) {
                .timeline::before {
                    left: 50%;
                    transform: translateX(-50%);
                }
            }

            .timeline-item {
                display: flex;
                margin-bottom: clamp(40px, 8vw, 60px);
                position: relative;
                flex-direction: row;
                padding-left: clamp(35px, 7vw, 50px);
            }

            @media (min-width: 768px) {
                .timeline-item {
                    padding-left: 0;
                }

                .timeline-item:nth-child(odd) {
                    flex-direction: row;
                }

                .timeline-item:nth-child(even) {
                    flex-direction: row-reverse;
                }
            }

            .timeline-content {
                width: 100%;
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: clamp(15px, 3vw, 20px);
                padding: clamp(20px, 4vw, 30px);
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
            }

            @media (min-width: 768px) {
                .timeline-content {
                    width: calc(50% - 40px);
                }
            }

            .timeline-content::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                background: linear-gradient(
                    120deg,
                    transparent 30%,
                    rgba(0, 255, 136, 0.15),
                    transparent 70%
                );
                opacity: 0;
                transition: opacity 0.4s ease;
            }

            .timeline-content:hover::before {
                opacity: 1;
            }
            .timeline-content:hover {
                background: rgba(255, 255, 255, 0.06);
                border-color: var(--primary);
                transform: translateY(-8px);
                box-shadow: 0 30px 80px rgba(0, 0, 0, 0.45),
                    0 0 0 1px rgba(0, 255, 136, 0.15);
            }

            .timeline-dot {
                position: absolute;
                left: clamp(8px, 2vw, 11px);
                top: 0;
                width: clamp(16px, 3vw, 20px);
                height: clamp(16px, 3vw, 20px);
                background: var(--primary);
                border-radius: 50%;
                border: clamp(3px, 0.6vw, 4px) solid var(--dark);
                box-shadow: 0 0 30px var(--primary);
                z-index: 2;
                animation: pulseGlow 2.5s ease-in-out infinite;
            }
            @keyframes pulseGlow {
                0% {
                    box-shadow: 0 0 10px var(--primary);
                }
                50% {
                    box-shadow: 0 0 30px var(--primary);
                }
                100% {
                    box-shadow: 0 0 10px var(--primary);
                }
            }

            @media (min-width: 768px) {
                .timeline-dot {
                    left: 50%;
                    transform: translateX(-50%);
                }
            }

            .timeline-date {
                display: inline-block;
                padding: clamp(5px, 1.2vw, 6px) clamp(12px, 2.5vw, 15px);
                background: rgba(0, 255, 136, 0.1);
                border: 1px solid var(--primary);
                border-radius: 50px;
                color: var(--primary);
                font-size: clamp(11px, 2vw, 14px);
                font-weight: 600;
                margin-bottom: clamp(12px, 2.5vh, 15px);
            }

            .timeline-content h3 {
                font-size: clamp(18px, 3.5vw, 22px);
                margin-bottom: clamp(6px, 1.5vh, 8px);
                color: var(--light);
                line-height: 1.3;
            }

            .timeline-content h4 {
                font-size: clamp(14px, 2.5vw, 16px);
                color: var(--secondary);
                margin-bottom: clamp(12px, 2.5vh, 15px);
            }

            .timeline-content p {
                color: rgba(255, 255, 255, 0.7);
                font-size: clamp(14px, 2.2vw, 16px);
                line-height: 1.7;
            }

            /* Projects Grid - Optimized */
            .projects-grid {
                display: grid;
                grid-template-columns: repeat(
                    auto-fit,
                    minmax(min(100%, 300px), 1fr)
                );
                gap: clamp(20px, 4vw, 35px);
            }

            .project-card {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: clamp(20px, 4vw, 25px);
                overflow: hidden;
                transition: all 0.4s ease;
                cursor: pointer;
            }

            .project-card:hover {
                transform: translateY(-15px);
                border-color: var(--secondary);
                box-shadow: 0 25px 70px rgba(0, 153, 255, 0.3);
            }

            .project-image {
                width: 100%;
                height: clamp(160px, 30vw, 220px);
                background: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: clamp(40px, 10vw, 64px);
                color: rgba(255, 255, 255, 0.3);
                position: relative;
                overflow: hidden;
            }

            .project-image::after {
                content: "";
                position: absolute;
                inset: 0;
                background: linear-gradient(
                    45deg,
                    transparent 30%,
                    rgba(255, 255, 255, 0.1) 50%,
                    transparent 70%
                );
                transform: translateX(-100%);
                transition: transform 0.6s ease;
            }

            .project-card:hover .project-image::after {
                transform: translateX(100%);
            }

            .project-info {
                padding: clamp(20px, 4vw, 30px);
            }

            .project-info h3 {
                font-size: clamp(18px, 3.5vw, 22px);
                margin-bottom: clamp(12px, 2.5vh, 15px);
                color: var(--light);
                line-height: 1.3;
            }

            .project-info p {
                color: rgba(255, 255, 255, 0.7);
                font-size: clamp(14px, 2.2vw, 16px);
                line-height: 1.7;
                margin-bottom: clamp(15px, 3vh, 20px);
            }

            .project-tags {
                display: flex;
                flex-wrap: wrap;
                gap: clamp(8px, 2vw, 10px);
            }

            .tag {
                padding: clamp(5px, 1.2vw, 6px) clamp(12px, 2.5vw, 15px);
                background: rgba(0, 153, 255, 0.1);
                border: 1px solid var(--secondary);
                border-radius: 50px;
                color: var(--secondary);
                font-size: clamp(10px, 1.8vw, 12px);
                font-weight: 600;
                white-space: nowrap;
            }

            /* =========================
               EDUCATION — NEXT LEVEL
            ========================= */

            .education-grid {
                display: grid;
                grid-template-columns: repeat(
                    auto-fit,
                    minmax(min(100%, 300px), 1fr)
                );
                gap: clamp(24px, 5vw, 36px);
                margin-top: 60px;
            }

            /* Card */
            .education-card {
                position: relative;
                display: flex;
                gap: 22px;
                padding: clamp(22px, 4vw, 30px);
                border-radius: 20px;

                background: linear-gradient(
                    180deg,
                    rgba(255, 255, 255, 0.08),
                    rgba(255, 255, 255, 0.02)
                );
                border: 1px solid rgba(255, 255, 255, 0.12);
                backdrop-filter: blur(14px);
                -webkit-backdrop-filter: blur(14px);

                transition: all 0.45s cubic-bezier(0.4, 0, 0.2, 1);
                overflow: hidden;
            }

            /* Accent glow line */
            .education-card::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                background: linear-gradient(
                    120deg,
                    transparent 20%,
                    rgba(0, 255, 136, 0.25),
                    transparent 80%
                );
                opacity: 0;
                transition: opacity 0.45s ease;
            }

            /* Hover */
            .education-card:hover {
                transform: translateY(-10px) scale(1.01);
                border-color: var(--primary);
                box-shadow: 0 30px 60px rgba(0, 0, 0, 0.35),
                    0 0 0 1px rgba(0, 255, 136, 0.15);
            }

            .education-card:hover::before {
                opacity: 1;
            }

            /* Icon */
            .education-icon {
                width: 56px;
                height: 56px;
                border-radius: 16px;
                background: linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 22px;
                color: #000;
                flex-shrink: 0;

                box-shadow: 0 10px 30px rgba(0, 255, 136, 0.35);

                transition: transform 0.45s ease;
            }

            .education-card:hover .education-icon {
                transform: rotate(-6deg) scale(1.1);
            }

            /* Content */
            .education-content h3 {
                font-size: clamp(17px, 3vw, 19px);
                font-weight: 600;
                margin-bottom: 4px;
                letter-spacing: 0.3px;
            }

            .education-school {
                display: block;
                font-size: clamp(13px, 2.5vw, 15px);
                opacity: 0.8;
                margin-bottom: 10px;
            }

            /* Meta */
            .education-meta {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                margin-bottom: 12px;
            }

            .education-meta span {
                font-size: 12px;
                padding: 6px 12px;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.08);
                border: 1px solid rgba(255, 255, 255, 0.12);
                white-space: nowrap;
            }

            /* Description */
            .education-content p {
                font-size: 14px;
                line-height: 1.7;
                opacity: 0.9;
            }

            /* Mobile */
            @media (max-width: 640px) {
                .education-card {
                    flex-direction: column;
                }

                .education-icon {
                    width: 50px;
                    height: 50px;
                }
            }
            /* Qualities Grid - Mobile Optimized */
            .qualities-grid {
                display: grid;
                grid-template-columns: repeat(
                    auto-fit,
                    minmax(min(100%, 140px), 1fr)
                );
                gap: clamp(15px, 3vw, 20px);
            }

            .quality-item {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(10px);
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: clamp(15px, 3vw, 20px);
                padding: clamp(20px, 4vw, 30px);
                text-align: center;
                transition: all 0.4s ease;
                cursor: default;
            }

            .quality-item:hover {
                background: linear-gradient(
                    135deg,
                    rgba(0, 255, 136, 0.1),
                    rgba(0, 153, 255, 0.1)
                );
                border-color: var(--primary);
                transform: scale(1.05) rotate(2deg);
                box-shadow: 0 15px 50px rgba(0, 255, 136, 0.3);
            }

            .quality-item i {
                font-size: clamp(28px, 6vw, 36px);
                color: var(--primary);
                margin-bottom: clamp(12px, 2.5vh, 15px);
                display: block;
            }

            .quality-item span {
                font-size: clamp(12px, 2.5vw, 16px);
                font-weight: 600;
                color: var(--light);
                text-transform: uppercase;
                letter-spacing: clamp(0.5px, 0.2vw, 1px);
                line-height: 1.3;
            }

            /* Footer - Responsive */
            footer {
                background: rgba(10, 14, 39, 0.95);
                backdrop-filter: blur(20px);
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding: clamp(40px, 8vw, 60px) 0 clamp(25px, 5vw, 30px);
                text-align: center;
            }

            .footer-content {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 clamp(16px, 4vw, 40px);
            }

            .social-links {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: clamp(12px, 3vw, 20px);
                margin-bottom: clamp(25px, 5vh, 30px);
            }

            .social-link {
                width: clamp(45px, 10vw, 50px);
                height: clamp(45px, 10vw, 50px);
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--light);
                text-decoration: none;
                transition: all 0.3s ease;
                font-size: clamp(18px, 4vw, 20px);
            }

            .social-link:hover {
                background: var(--primary);
                border-color: var(--primary);
                color: var(--dark);
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 255, 136, 0.4);
            }

            .footer-text {
                color: rgba(255, 255, 255, 0.5);
                font-size: clamp(12px, 2vw, 14px);
                line-height: 1.6;
            }

            .footer-highlight {
                color: var(--primary);
                font-weight: 600;
            }

            /* Scroll Animations */
            .scroll-animate {
                opacity: 0;
                transform: translateY(50px);
                transition: all 0.8s ease;
            }

            .scroll-animate.active {
                opacity: 1;
                transform: translateY(0);
            }

            /* Mobile Menu Button (Optional) */
            .mobile-menu-btn {
                display: block;
                background: transparent;
                border: none;
                color: var(--primary);
                font-size: 24px;
                cursor: pointer;
                z-index: 101;
            }

            @media (min-width: 768px) {
                .mobile-menu-btn {
                    display: none;
                }
            }

            /* Performance Optimizations */
            @media (prefers-reduced-motion: reduce) {
                *,
                *::before,
                *::after {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }

            /* Touch Device Optimizations */
            @media (hover: none) and (pointer: coarse) {
                .skill-card:hover,
                .project-card:hover,
                .quality-item:hover,
                .education-card:hover {
                    transform: none;
                }

                .btn:hover {
                    transform: none;
                }
            }

            /* Small Mobile Devices */
            @media (max-width: 374px) {
                .hero-text h1 {
                    font-size: 28px;
                }

                .typing-text {
                    font-size: 14px;
                }

                .btn {
                    min-width: 120px;
                    padding: 10px 20px;
                }

                .contact-info {
                    grid-template-columns: 1fr;
                }

                .image-wrapper {
                    width: 200px;
                    height: 200px;
                }
            }

            /* Large Tablets */
            @media (min-width: 768px) and (max-width: 1023px) {
                .hero-content {
                    gap: 50px;
                }

                .skills-grid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .projects-grid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .qualities-grid {
                    grid-template-columns: repeat(4, 1fr);
                }
            }

            /* Desktop Optimizations */
            @media (min-width: 1440px) {
                .container {
                    max-width: 1600px;
                }

                .nav-content {
                    max-width: 1600px;
                }

                .footer-content {
                    max-width: 1600px;
                }
            }

            /* Print Styles */
            @media print {
                .animated-bg,
                nav,
                .hero-buttons,
                .floating-icons,
                .glow-ring,
                footer {
                    display: none;
                }

                body {
                    background: white;
                    color: black;
                }

                section {
                    page-break-inside: avoid;
                }
            }

            /* High Contrast Mode */
            @media (prefers-contrast: high) {
                :root {
                    --primary: #00ff00;
                    --secondary: #00ccff;
                    --accent: #ff0099;
                }

                .btn,
                .skill-card,
                .project-card,
                .quality-item {
                    border-width: 2px;
                }
            }

            /* Dark Mode Support (already dark, but for consistency) */
            @media (prefers-color-scheme: light) {
                /* Keep dark theme even in light mode preference */
                body {
                    background: var(--darker);
                    color: var(--light);
                }
            }

            /* Landscape Mobile Optimization */
            @media (max-width: 896px) and (orientation: landscape) {
                .hero {
                    padding: 100px 0 40px;
                }

                .image-wrapper {
                    width: 200px;
                    height: 200px;
                }

                .floating-icons {
                    display: none;
                }
            }

            /* Ultra-wide Screens */
            @media (min-width: 1920px) {
                body {
                    font-size: 18px;
                }

                .hero-text h1 {
                    font-size: 80px;
                }

                .section-title {
                    font-size: 56px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Animated Background -->
        <div class="animated-bg">
            <div class="stars" id="stars"></div>
            <div class="floating-shapes">
                <div class="shape shape1"></div>
                <div class="shape shape2"></div>
                <div class="shape shape3"></div>
            </div>
        </div>

        <!-- Navigation -->
        <nav>
            <div class="nav-content">
                <div class="logo">SA</div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#certificates">Certificates</a></li>
                    <li><a href="#organization">Organization</a></li>
                    <li><a href="#projects">Projects</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>
                            Hi, I'm
                            <span class="gradient-text"
                                >Moh. Sahrul Alamsyah</span
                            >
                        </h1>
                        <div class="typing-container">
                            <span class="typing-text" id="typing"></span>
                        </div>
                        <p class="hero-description">
                            Lulusan D3 Sistem Informasi UBSI Tegal dengan
                            passion dalam web development dan IT support. Saya
                            adalah fast learner yang siap berkontribusi dan
                            terus berkembang di industri teknologi.
                        </p>
                        <div class="hero-buttons">
                            <a href="{{ route('cv') }}" class="btn btn-primary">
                                <i class="fas fa-file-alt"></i> CV
                            </a>
                            <a
                                href="https://github.com/alerascal"
                                target="_blank"
                                class="btn btn-secondary"
                            >
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <a
                                    href="https://maps.google.com/?q=Tegal, Jawa Tengah"
                                    target="_blank"
                                    style="
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                        white-space: nowrap;
                                        text-decoration: none;
                                        color: inherit;
                                    "
                                >
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Tegal, Jawa Tengah</span>
                                </a>
                            </div>

                            <div class="contact-item">
                                <a
                                    href="https://wa.me/6282220668915"
                                    target="_blank"
                                    style="
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                        white-space: nowrap;
                                        text-decoration: none;
                                        color: inherit;
                                    "
                                >
                                    <i class="fab fa-whatsapp"></i>
                                    <span>+62 822 2066 8915</span>
                                </a>
                            </div>
                            <div class="contact-item">
                                <a
                                    href="https://mail.google.com/mail/?view=cm&fs=1&to=alerascal77@gmail.com"
                                    target="_blank"
                                    style="
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                        white-space: nowrap;
                                        text-decoration: none;
                                        color: inherit;
                                    "
                                >
                                    <i class="fas fa-envelope"></i>
                                    <span>alerascal77@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hero-image">
                        <div class="image-wrapper">
                            <div class="glow-ring"></div>
                            <div class="image-container">
                                <img
                                    src="{{
                                        asset('assets/images/foto-sahrul.jpg')
                                    }}"
                                    alt="Sahrul Alamsyah"
                                />
                            </div>
                            <div class="floating-icons">
                                <div class="float-icon">
                                    <i class="fab fa-react"></i>
                                </div>
                                <div class="float-icon">
                                    <i class="fab fa-laravel"></i>
                                </div>
                                <div class="float-icon">
                                    <i class="fab fa-node-js"></i>
                                </div>
                                <div class="float-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- education Section -->
        <section id="education">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">Academic</span>
                    <h2 class="section-title">Education</h2>
                    <p class="section-description">
                        Latar belakang pendidikan formal
                    </p>
                </div>

                <div class="education-grid">
                    <div class="education-card scroll-animate">
                        <div class="education-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div class="education-content">
                            <h3>Diploma III (D3) Sistem Informasi</h3>
                            <span class="education-school">
                                Universitas Bina Sarana Informatika (UBSI) Tegal
                            </span>

                            <div class="education-meta">
                                <span>2022 – 2025</span>
                                <span>IPK 3.58 / 4.00</span>
                            </div>

                            <p>
                                Fokus pada pengembangan aplikasi web, sistem
                                informasi, dan perancangan basis data.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="timeline">
            <!-- Experience 1 -->
            <div class="timeline-item scroll-animate">
                <span class="timeline-dot"></span>

                <div class="timeline-content">
                    <span class="timeline-date">Juli 2024 – Sekarang</span>
                    <h3>Junior Fullstack Web Application Developer</h3>
                    <h4>Freelance</h4>

                    <ul>
                        <li>
                            Mengembangkan aplikasi web seperti
                            <strong>sistem absensi karyawan</strong>,
                            <strong>dashboard manajemen data</strong>, dan
                            <strong>sistem informasi publik</strong>.
                        </li>
                        <li>
                            Menangani pengembangan
                            <strong>frontend & backend</strong> menggunakan
                            <strong>Laravel, PHP, JavaScript, dan MySQL</strong
                            >.
                        </li>
                        <li>
                            Merancang arsitektur sistem dan database yang
                            <strong>efisien, aman, dan scalable</strong>.
                        </li>
                        <li>
                            Melakukan pemeliharaan sistem serta pengembangan
                            fitur berdasarkan kebutuhan pengguna.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Experience 2 -->
            <div class="timeline-item scroll-animate">
                <span class="timeline-dot"></span>

                <div class="timeline-content">
                    <span class="timeline-date"
                        >September 2024 – Desember 2024</span
                    >
                    <h3>IT Support Intern</h3>
                    <h4>Kantor Sekretariat DPRD Kota Tegal</h4>

                    <ul>
                        <li>
                            Melakukan pemeliharaan infrastruktur IT dan
                            <strong>network troubleshooting</strong>.
                        </li>
                        <li>
                            Merancang dan membangun
                            <strong>aplikasi pelayanan publik digital</strong>.
                        </li>
                        <li>
                            Melakukan pemeliharaan sistem web dan database untuk
                            menjaga <strong>keamanan & stabilitas data</strong>.
                        </li>
                        <li>
                            Memberikan dukungan teknis perangkat keras dan
                            perangkat lunak kepada pegawai.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Experience 3 -->
            <div class="timeline-item scroll-animate">
                <span class="timeline-dot"></span>

                <div class="timeline-content">
                    <span class="timeline-date"
                        >November 2024 – Desember 2024</span
                    >
                    <h3>Host Livestreaming</h3>
                    <h4>Shopee Affiliate</h4>

                    <ul>
                        <li>
                            Menjadi host live streaming untuk mempromosikan
                            produk secara langsung.
                        </li>
                        <li>
                            Menjaga engagement audiens dan menjawab pertanyaan
                            real-time.
                        </li>
                        <li>
                            Terbiasa bekerja dengan target performa dan
                            penjualan.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Experience 4 -->
            <div class="timeline-item scroll-animate">
                <span class="timeline-dot"></span>

                <div class="timeline-content">
                    <span class="timeline-date">April 2020 – Juli 2022</span>
                    <h3>Operator Gudang</h3>
                    <h4>Annayra Collection Store (Fashion)</h4>

                    <ul>
                        <li>
                            Mengelola penerimaan, penyimpanan, dan pengemasan
                            barang fashion.
                        </li>
                        <li>
                            Mengelola stok dan memastikan kesesuaian data
                            gudang.
                        </li>
                        <li>
                            Menyiapkan pesanan untuk pengiriman marketplace.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <section id="skills">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">My Expertise</span>
                    <h2 class="section-title">Technical Skills</h2>
                    <p class="section-description">
                        Teknologi dan tools yang saya kuasai untuk membangun
                        solusi digital
                    </p>
                </div>
                <div class="skills-grid">
                    <div class="skill-card scroll-animate">
                        <div class="skill-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Frontend Development</h3>
                        <ul class="skill-list">
                            <li>HTML5 & CSS3</li>
                            <li>JavaScript (ES6+)</li>
                            <li>React.js</li>
                            <li>Bootstrap & Tailwind</li>
                            <li>Responsive Design</li>
                        </ul>
                    </div>
                    <div class="skill-card scroll-animate">
                        <div class="skill-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>Backend Development</h3>
                        <ul class="skill-list">
                            <li>PHP</li>
                            <li>Laravel Framework</li>
                            <li>Node.js</li>
                            <li>REST API</li>
                            <li>MVC Architecture</li>
                        </ul>
                    </div>
                    <div class="skill-card scroll-animate">
                        <div class="skill-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Database</h3>
                        <ul class="skill-list">
                            <li>MySQL</li>
                            <li>Database Design</li>
                            <li>Query Optimization</li>
                            <li>Data Modeling</li>
                        </ul>
                    </div>
                    <div class="skill-card scroll-animate">
                        <div class="skill-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Tools & Others</h3>
                        <ul class="skill-list">
                            <li>Git & GitHub</li>
                            <li>VS Code</li>
                            <li>IT Support</li>
                            <li>Network Config</li>
                            <li>System Admin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Qualities Section -->
        <section id="qualities">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">Soft Skills</span>
                    <h2 class="section-title">Personal Qualities</h2>
                    <p class="section-description">
                        Karakteristik dan nilai-nilai yang saya miliki
                    </p>
                </div>
                <div class="qualities-grid">
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-bolt"></i>
                        <span>Fast Learner</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-sync-alt"></i>
                        <span>Quick Adapt</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-rocket"></i>
                        <span>Proactive</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-lightbulb"></i>
                        <span>Solution Oriented</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-clock"></i>
                        <span>Disciplined</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-users"></i>
                        <span>Team Player</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-shield-alt"></i>
                        <span>Responsible</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-bullseye"></i>
                        <span>Target Driven</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-search"></i>
                        <span>Detail Oriented</span>
                    </div>
                    <div class="quality-item scroll-animate">
                        <i class="fas fa-comments"></i>
                        <span>Good Communication</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificates">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">Credentials</span>
                    <h2 class="section-title">Certificates & Achievements</h2>
                    <p class="section-description">
                        Sertifikasi dan pengakuan kompetensi profesional
                    </p>
                </div>

                <div class="projects-grid">
                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="project-info">
                            <h3>Sertifikasi Kompetensi Software Development</h3>
                            <p>
                                Dinyatakan <strong>Kompeten</strong> dalam
                                bidang pengembangan perangkat lunak sesuai
                                standar nasional.
                            </p>
                            <div class="project-tags">
                                <span class="tag">BNSP</span>
                                <span class="tag">2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="project-info">
                            <h3>Database Systems Certification</h3>
                            <p>
                                Sertifikat profisiensi sistem basis data dengan
                                predikat
                                <strong>EXPERT</strong>.
                            </p>
                            <div class="project-tags">
                                <span class="tag">IAII</span>
                                <span class="tag">2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="project-info">
                            <h3>Sertifikat Internship IT Support</h3>
                            <p>
                                Fokus pada pengelolaan data, IT Support, dan
                                layanan informasi publik.
                            </p>
                            <div class="project-tags">
                                <span class="tag">DPRD Kota Tegal</span>
                                <span class="tag">2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="organization">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">Activities</span>
                    <h2 class="section-title">
                        Organization & Volunteer Experience
                    </h2>
                    <p class="section-description">
                        Pengalaman organisasi dan kegiatan sosial
                    </p>
                </div>

                <div class="timeline">
                    <div class="timeline-item scroll-animate">
                        <div class="timeline-content">
                            <span class="timeline-date">Februari 2024</span>
                            <h3>Saksi Pemilu (TPS)</h3>
                            <h4>Penyelenggara Pemilihan Umum</h4>
                            <p>
                                Bertugas melakukan pengawasan proses pemungutan
                                dan penghitungan suara dengan penuh ketelitian
                                dan integritas.
                            </p>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="timeline-item scroll-animate">
                        <div class="timeline-content">
                            <span class="timeline-date">November 2022</span>
                            <h3>Tim Sosialisasi Kampus</h3>
                            <h4>Universitas Bina Sarana Informatika</h4>
                            <p>
                                Melakukan presentasi dan sosialisasi kampus ke
                                SMA/MA, melatih kemampuan public speaking dan
                                kerja tim.
                            </p>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="timeline-item scroll-animate">
                        <div class="timeline-content">
                            <span class="timeline-date">2020</span>
                            <h3>Petugas Jaga Malam (Linmas)</h3>
                            <h4>Desa Kemandungan, Kota Tegal</h4>
                            <p>
                                Menjaga keamanan lingkungan melalui patroli
                                malam dan koordinasi tim.
                            </p>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-tag">Portfolio</span>
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="section-description">
                        Beberapa proyek yang telah saya kerjakan
                    </p>
                </div>
                <div class="projects-grid">
                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="project-info">
                            <h3>Sistem Informasi Absensi</h3>
                            <p>
                                Aplikasi web untuk mengelola absensi karyawan
                                dengan fitur real-time monitoring, laporan, dan
                                dashboard analytics.
                            </p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="project-info">
                            <h3>E-Commerce Platform</h3>
                            <p>
                                Platform jual-beli online dengan fitur shopping
                                cart, payment gateway integration, dan order
                                management.
                            </p>
                            <div class="project-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">MySQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card scroll-animate">
                        <div class="project-image">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="project-info">
                            <h3>Company Profile</h3>
                            <p>
                                Website profil perusahaan responsif dengan CMS
                                untuk update konten, portfolio showcase, dan
                                contact form.
                            </p>
                            <div class="project-tags">
                                <span class="tag">React.js</span>
                                <span class="tag">Node.js</span>
                                <span class="tag">REST API</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer id="contact">
            <div class="footer-content">
                <div class="social-links">
                    <a href="mailto:alerascal77@gmail.com" class="social-link"
                        ><i class="fas fa-envelope"></i
                    ></a>
                    <a
                        href="https://github.com/alerascal"
                        class="social-link"
                        target="_blank"
                        ><i class="fab fa-github"></i
                    ></a>
                    <a
                        href="https://linkedin.com"
                        class="social-link"
                        target="_blank"
                        ><i class="fab fa-linkedin"></i
                    ></a>
                    <a
                        href="https://wa.me/6282220668915"
                        class="social-link"
                        target="_blank"
                        ><i class="fab fa-whatsapp"></i
                    ></a>
                </div>
                <p class="footer-text">
                    © 2026 Moh. Sahrul Alamsyah •
                    <span class="footer-highlight"
                        >Ready to Innovate & Contribute</span
                    >
                </p>
            </div>
        </footer>

        <script>
            // Generate stars
            const starsContainer = document.getElementById("stars");
            for (let i = 0; i < 200; i++) {
                const star = document.createElement("div");
                star.className = "star";
                star.style.left = Math.random() * 100 + "%";
                star.style.top = Math.random() * 100 + "%";
                star.style.animationDelay = Math.random() * 3 + "s";
                starsContainer.appendChild(star);
            }

            const texts = [
                "Junior Fullstack Web Developer",
                "Web Developer & IT Support",
                "Laravel & PHP Developer",
                "Problem Solver",
            ];

            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            const typingElement = document.getElementById("typing");
            const typingSpeed = 100;
            const deletingSpeed = 50;
            const pauseTime = 2000;

            function type() {
                const currentText = texts[textIndex];

                if (isDeleting) {
                    typingElement.textContent = currentText.substring(
                        0,
                        charIndex - 1
                    );
                    charIndex--;
                } else {
                    typingElement.textContent = currentText.substring(
                        0,
                        charIndex + 1
                    );
                    charIndex++;
                }

                if (!isDeleting && charIndex === currentText.length) {
                    setTimeout(() => (isDeleting = true), pauseTime);
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                }

                const speed = isDeleting ? deletingSpeed : typingSpeed;
                setTimeout(type, speed);
            }

            // Start typing animation
            setTimeout(type, 1000);

            // Scroll animations
            const scrollElements = document.querySelectorAll(".scroll-animate");

            const elementInView = (el, offset = 100) => {
                const elementTop = el.getBoundingClientRect().top;
                return (
                    elementTop <=
                    (window.innerHeight ||
                        document.documentElement.clientHeight) -
                        offset
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("active");
            };

            const handleScrollAnimation = () => {
                scrollElements.forEach((el) => {
                    if (elementInView(el, 100)) {
                        displayScrollElement(el);
                    }
                });
            };

            window.addEventListener("scroll", handleScrollAnimation);
            handleScrollAnimation(); // Initial check

            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    const target = document.querySelector(
                        this.getAttribute("href")
                    );
                    if (target) {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });
                    }
                });
            });

            // Navbar scroll effect
            let lastScroll = 0;
            const nav = document.querySelector("nav");

            window.addEventListener("scroll", () => {
                const currentScroll = window.pageYOffset;

                if (currentScroll > 100) {
                    nav.style.background = "rgba(10, 14, 39, 0.95)";
                    nav.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.3)";
                } else {
                    nav.style.background = "rgba(10, 14, 39, 0.8)";
                    nav.style.boxShadow = "none";
                }

                lastScroll = currentScroll;
            });

            // Card animations on hover
            document
                .querySelectorAll(".skill-card, .project-card, .quality-item")
                .forEach((card) => {
                    card.addEventListener("mouseenter", function () {
                        this.style.transition =
                            "all 0.4s cubic-bezier(0.4, 0, 0.2, 1)";
                    });
                });

            // Parallax effect for hero section
            window.addEventListener("scroll", () => {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector(".hero");
                if (hero && scrolled < window.innerHeight) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                    hero.style.opacity =
                        1 - (scrolled / window.innerHeight) * 0.5;
                }
            });
        </script>
    </body>
</html>
