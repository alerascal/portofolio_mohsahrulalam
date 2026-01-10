<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moh. Sahrul Alamsyah - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");

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
            font-family: "Inter", sans-serif;
            background: var(--darker);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(ellipse at top, #0a1628 0%, #050814 100%);
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
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.12;
            animation: float-shape 20s infinite ease-in-out;
        }

        .shape1 {
            width: 500px;
            height: 500px;
            background: var(--primary);
            top: -200px;
            left: -150px;
        }

        .shape2 {
            width: 400px;
            height: 400px;
            background: var(--secondary);
            bottom: -150px;
            right: -100px;
            animation-delay: -7s;
        }

        .shape3 {
            width: 350px;
            height: 350px;
            background: var(--accent);
            top: 40%;
            right: 10%;
            animation-delay: -14s;
        }

        @keyframes float-shape {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(80px, -80px) rotate(120deg); }
            66% { transform: translate(-80px, 80px) rotate(240deg); }
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 clamp(16px, 4vw, 40px);
            position: relative;
            z-index: 1;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: clamp(12px, 2vh, 20px) 0;
            background: rgba(10, 14, 39, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            background: rgba(10, 14, 39, 0.95);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: clamp(8px, 1.5vh, 15px) 0;
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
            font-size: clamp(20px, 4vw, 28px);
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            gap: clamp(20px, 3vw, 35px);
            list-style: none;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-weight: 500;
            font-size: clamp(13px, 1.5vw, 15px);
            transition: all 0.3s ease;
            position: relative;
            padding: 6px 0;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            bottom: 0;
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

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            z-index: 1001;
            padding: 8px;
        }

        .menu-toggle span {
            width: 26px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(7px, 7px);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(8px, -8px);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: clamp(100px, 15vh, 140px) 0 clamp(60px, 10vh, 100px);
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(40px, 6vw, 80px);
            align-items: center;
        }

        .hero-text h1 {
            font-size: clamp(32px, 6vw, 72px);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: gradient-shift 3s ease infinite;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .typing-container {
            min-height: clamp(32px, 5vw, 45px);
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease 0.4s both;
        }

        .typing-text {
            font-size: clamp(16px, 3vw, 28px);
            color: var(--primary);
            font-weight: 600;
            border-right: 3px solid var(--primary);
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
        }

        .hero-description {
            font-size: clamp(14px, 2vw, 18px);
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease 0.6s both;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease 0.8s both;
        }

        .btn {
            padding: clamp(12px, 2vw, 16px) clamp(24px, 4vw, 40px);
            border-radius: 50px;
            font-weight: 600;
            font-size: clamp(13px, 1.5vw, 15px);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--dark);
            box-shadow: 0 8px 30px rgba(0, 255, 136, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 255, 136, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 2px solid rgba(255, 255, 255, 0.15);
        }

        .btn-secondary:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* Hero Image */
        .hero-image {
            position: relative;
            animation: fadeInUp 0.8s ease 0.4s both;
            display: flex;
            justify-content: center;
        }

        .image-wrapper {
            position: relative;
            width: min(100%, 450px);
            aspect-ratio: 1;
        }

        .glow-ring {
            position: absolute;
            inset: -15px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, var(--primary), var(--secondary), var(--accent), var(--primary));
            animation: rotate 4s linear infinite;
            filter: blur(15px);
            opacity: 0.7;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        /* Floating Tech Icons - Modern Design */
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .float-icon {
            position: absolute;
            width: clamp(50px, 8vw, 70px);
            height: clamp(50px, 8vw, 70px);
            background: rgba(10, 14, 39, 0.9);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(20px, 3.5vw, 28px);
            animation: float-icon 3s ease-in-out infinite;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .float-icon:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 255, 136, 0.4);
        }

        @keyframes float-icon {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .float-icon:nth-child(1) {
            top: 8%;
            left: -8%;
            animation-delay: 0s;
            background: linear-gradient(135deg, rgba(97, 218, 251, 0.15), rgba(10, 14, 39, 0.95));
            border-color: #61dafb;
            color: #61dafb;
        }

        .float-icon:nth-child(2) {
            top: 25%;
            right: -8%;
            animation-delay: 1s;
            background: linear-gradient(135deg, rgba(255, 45, 32, 0.15), rgba(10, 14, 39, 0.95));
            border-color: #ff2d20;
            color: #ff2d20;
        }

        .float-icon:nth-child(3) {
            bottom: 22%;
            left: -6%;
            animation-delay: 2s;
            background: linear-gradient(135deg, rgba(104, 160, 99, 0.15), rgba(10, 14, 39, 0.95));
            border-color: #68a063;
            color: #68a063;
        }

        .float-icon:nth-child(4) {
            bottom: 8%;
            right: -6%;
            animation-delay: 1.5s;
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.15), rgba(10, 14, 39, 0.95));
            border-color: var(--primary);
            color: var(--primary);
        }

        /* Contact Info */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 12px;
            margin-top: 30px;
            animation: fadeInUp 0.8s ease 1s both;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: clamp(10px, 2vw, 14px) clamp(12px, 2.5vw, 18px);
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: clamp(12px, 1.5vw, 14px);
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary);
            transform: translateX(5px);
        }

        .contact-item i {
            color: var(--primary);
            font-size: clamp(14px, 2vw, 17px);
            flex-shrink: 0;
        }

        .contact-item span {
            color: rgba(255, 255, 255, 0.8);
            word-break: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Section Styles */
        section {
            padding: clamp(60px, 10vh, 100px) 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: clamp(40px, 8vh, 70px);
        }

        .section-tag {
            display: inline-block;
            padding: 6px 18px;
            background: rgba(0, 255, 136, 0.1);
            border: 1px solid var(--primary);
            border-radius: 50px;
            color: var(--primary);
            font-size: clamp(11px, 1.5vw, 13px);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 800;
            margin-bottom: 15px;
        }

        .section-description {
            font-size: clamp(14px, 2vw, 17px);
            color: rgba(255, 255, 255, 0.6);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(280px, 100%), 1fr));
            gap: clamp(20px, 3vw, 30px);
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: clamp(25px, 4vw, 40px);
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
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.07);
            border-color: var(--primary);
            box-shadow: 0 15px 50px rgba(0, 255, 136, 0.2);
        }

        .skill-card:hover::before {
            transform: scaleX(1);
        }

        .skill-icon {
            width: clamp(55px, 8vw, 70px);
            height: clamp(55px, 8vw, 70px);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(24px, 4vw, 32px);
            margin-bottom: 20px;
            color: var(--dark);
        }

        .skill-card h3 {
            font-size: clamp(18px, 2.5vw, 23px);
            margin-bottom: 18px;
            color: var(--light);
            font-weight: 700;
        }

        .skill-list {
            list-style: none;
        }

        .skill-list li {
            padding: 8px 0;
            color: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: clamp(13px, 1.8vw, 15px);
            transition: all 0.3s ease;
        }

        .skill-list li::before {
            content: "▹";
            color: var(--primary);
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .skill-list li:hover {
            color: var(--primary);
            padding-left: 8px;
        }

        /* Timeline */
        .timeline {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, var(--primary), var(--secondary), var(--accent));
        }

        .timeline-item {
            display: flex;
            margin-bottom: clamp(35px, 6vh, 55px);
            position: relative;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            width: calc(50% - 25px);
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: clamp(20px, 3vw, 30px);
            transition: all 0.4s ease;
        }

        .timeline-content:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: var(--primary);
            transform: scale(1.03);
            box-shadow: 0 15px 50px rgba(0, 255, 136, 0.2);
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 14px;
            height: 14px;
            background: var(--primary);
            border-radius: 50%;
            border: 3px solid var(--dark);
            box-shadow: 0 0 20px var(--primary);
            z-index: 2;
        }

        .timeline-date {
            display: inline-block;
            padding: 5px 12px;
            background: rgba(0, 255, 136, 0.1);
            border: 1px solid var(--primary);
            border-radius: 50px;
            color: var(--primary);
            font-size: clamp(11px, 1.5vw, 13px);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .timeline-content h3 {
            font-size: clamp(16px, 2.5vw, 21px);
            margin-bottom: 6px;
            color: var(--light);
            font-weight: 700;
        }

        .timeline-content h4 {
            font-size: clamp(13px, 2vw, 15px);
            color: var(--secondary);
            margin-bottom: 12px;
        }

        .timeline-content p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            font-size: clamp(13px, 1.8vw, 15px);
        }

        /* Education Grid */
        .education-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
            gap: clamp(20px, 3vw, 28px);
        }

        .education-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: clamp(20px, 3vw, 28px);
            display: flex;
            gap: 18px;
            transition: all 0.4s ease;
        }

        .education-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary);
        }

        .education-icon {
            width: clamp(48px, 7vw, 56px);
            height: clamp(48px, 7vw, 56px);
            border-radius: 50%;
            background: linear-gradient(135deg, #7f5af0, #2cb67d);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: clamp(20px, 3vw, 24px);
            flex-shrink: 0;
        }

        .education-content h3 {
            font-size: clamp(15px, 2vw, 18px);
            margin-bottom: 4px;
            font-weight: 700;
        }

        .education-school {
            font-size: clamp(13px, 1.8vw, 15px);
            opacity: 0.85;
        }

        .education-meta {
            display: flex;
            gap: 10px;
            font-size: clamp(12px, 1.5vw, 13px);
            margin: 8px 0 12px;
            opacity: 0.9;
            flex-wrap: wrap;
        }

        .education-meta span {
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.1);
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
            gap: clamp(20px, 3vw, 32px);
        }

        .project-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: var(--secondary);
            box-shadow: 0 20px 60px rgba(0, 153, 255, 0.3);
        }

        .project-image {
            width: 100%;
            height: clamp(160px, 25vw, 220px);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(40px, 7vw, 64px);
            color: rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .project-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-image::after {
            transform: translateX(100%);
        }

        .project-info {
            padding: clamp(20px, 3vw, 28px);
        }

        .project-info h3 {
            font-size: clamp(16px, 2.5vw, 20px);
            margin-bottom: 12px;
            color: var(--light);
            font-weight: 700;
        }

        .project-info p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            margin-bottom: 16px;
            font-size: clamp(13px, 1.8vw, 15px);
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            padding: 5px 12px;
            background: rgba(0, 153, 255, 0.1);
            border: 1px solid var(--secondary);
            border-radius: 50px;
            color: var(--secondary);
            font-size: clamp(10px, 1.5vw, 12px);
            font-weight: 600;
        }

        /* Qualities Grid */
        .qualities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(140px, 100%), 1fr));
            gap: clamp(14px, 2.5vw, 20px);
        }

        .quality-item {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: clamp(20px, 3vw, 28px);
            text-align: center;
            transition: all 0.4s ease;
            cursor: default;
        }

        .quality-item:hover {
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 153, 255, 0.1));
            border-color: var(--primary);
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 12px 40px rgba(0, 255, 136, 0.3);
        }

        .quality-item i {
            font-size: clamp(26px, 4vw, 34px);
            color: var(--primary);
            margin-bottom: 12px;
            display: block;
        }

        .quality-item span {
            font-size: clamp(12px, 1.8vw, 15px);
            font-weight: 600;
            color: var(--light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Footer */
        footer {
            background: rgba(10, 14, 39, 0.85);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: clamp(40px, 8vh, 60px) 0 clamp(20px, 4vh, 30px);
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .social-link {
            width: clamp(42px, 6vw, 50px);
            height: clamp(42px, 6vw, 50px);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: clamp(16px, 2.5vw, 20px);
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
            font-size: clamp(12px, 1.8vw, 14px);
        }

        .footer-highlight {
            color: var(--primary);
            font-weight: 600;
        }

        /* Scroll Animations */
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .scroll-animate.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .hero-text {
                text-align: center;
            }

            .hero-buttons {
                justify-content: center;
            }

            .contact-info {
                grid-template-columns: repeat(2, 1fr);
            }

            .timeline::before {
                left: 0;
            }

            .timeline-item {
                flex-direction: row !important;
                padding-left: 30px;
            }

            .timeline-content {
                width: 100%;
            }

            .timeline-dot {
                left: 0;
            }

            .float-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

            .float-icon:nth-child(1),
            .float-icon:nth-child(3) {
                left: -5%;
            }

            .float-icon:nth-child(2),
            .float-icon:nth-child(4) {
                right: -5%;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: min(75%, 300px);
                height: 100vh;
                background: rgba(10, 14, 39, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 100px 30px 40px;
                gap: 25px;
                border-left: 1px solid rgba(255, 255, 255, 0.1);
                transition: right 0.4s ease;
                box-shadow: -10px 0 40px rgba(0, 0, 0, 0.5);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links a {
                font-size: 16px;
                padding: 10px 0;
            }

            .menu-toggle {
                display: flex;
            }

            .contact-info {
                grid-template-columns: 1fr;
            }

            .skills-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .qualities-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .float-icon {
                display: none;
            }

            .education-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .hero-buttons {
                flex-direction: column;
                width: 100%;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .timeline-item {
                padding-left: 25px;
            }

            .timeline-content {
                padding: 18px;
            }

            .qualities-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .quality-item {
                padding: 18px 12px;
            }
        }

        @media (max-width: 360px) {
            .contact-item span {
                font-size: 11px;
            }

            .qualities-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Landscape Mobile */
        @media (max-width: 900px) and (max-height: 500px) {
            .hero {
                min-height: auto;
                padding: 100px 0 60px;
            }

            .nav-links {
                padding: 80px 30px 30px;
                gap: 20px;
            }
        }

        /* Large Screens */
        @media (min-width: 1920px) {
            .container {
                max-width: 1600px;
            }

            .nav-content {
                max-width: 1600px;
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
    <nav id="navbar">
        <div class="nav-content">
            <div class="logo">SA</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#certificates">Certificates</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#organization">Organization</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, I'm <span class="gradient-text">Moh. Sahrul Alamsyah</span></h1>
                    <div class="typing-container">
                        <span class="typing-text" id="typing"></span>
                    </div>
                    <p class="hero-description">
                        Fresh graduate dari D3 Sistem Informasi UBSI Tegal dengan passion dalam web development dan IT support. Saya adalah fast learner yang siap berkontribusi dan terus berkembang di industri teknologi.
                    </p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">
                            <i class="fas fa-envelope"></i> Contact Me
                        </a>
                        <a href="#projects" class="btn btn-secondary">
                            <i class="fas fa-folder"></i> View Projects
                        </a>
                    </div>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Tegal, Jawa Tengah</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 822 2066 8915</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>alerascal77@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-github"></i>
                            <span>github.com/alerascal</span>
                        </div>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="image-wrapper">
                        <div class="glow-ring"></div>
                        <div class="image-container"></div>
                        <div class="floating-icons">
                            <div class="float-icon"><i class="fab fa-react"></i></div>
                            <div class="float-icon"><i class="fab fa-laravel"></i></div>
                            <div class="float-icon"><i class="fab fa-node-js"></i></div>
                            <div class="float-icon"><i class="fas fa-database"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Academic</span>
                <h2 class="section-title">Education</h2>
                <p class="section-description">Latar belakang pendidikan formal</p>
            </div>
            <div class="education-grid">
                <div class="education-card scroll-animate">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="education-content">
                        <h3>Diploma III (D3) Sistem Informasi</h3>
                        <span class="education-school">Universitas Bina Sarana Informatika (UBSI) Tegal</span>
                        <div class="education-meta">
                            <span>2022 – 2025</span>
                            <span>IPK 3.58 / 4.00</span>
                        </div>
                        <p>Fokus pada pengembangan aplikasi web, sistem informasi, dan perancangan basis data.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Career Journey</span>
                <h2 class="section-title">Experience</h2>
                <p class="section-description">Perjalanan profesional dan pengalaman kerja saya</p>
            </div>
            <div class="timeline">
                <div class="timeline-item scroll-animate">
                    <div class="timeline-content">
                        <span class="timeline-date">2023 - Present</span>
                        <h3>Freelance Web Developer</h3>
                        <h4>Various Projects</h4>
                        <p>
                            Mengembangkan aplikasi web sesuai kebutuhan klien, meliputi <strong>sistem absensi karyawan</strong>, <strong>dashboard manajemen data</strong>, dan <strong>sistem informasi publik</strong>. Menangani proses <strong>frontend & backend</strong>, perancangan <strong>database</strong>, serta pemeliharaan sistem.
                        </p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-content">
                        <span class="timeline-date">2022 - 2023</span>
                        <h3>IT Support Intern</h3>
                        <h4>Magang & Operasional</h4>
                        <p>
                            Memberikan dukungan teknis IT meliputi <strong>troubleshooting jaringan</strong>, <strong>instalasi dan konfigurasi perangkat</strong>, serta pemeliharaan sistem dan database. Terlibat dalam pengembangan <strong>aplikasi pelayanan publik digital</strong>.
                        </p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">My Expertise</span>
                <h2 class="section-title">Technical Skills</h2>
                <p class="section-description">Teknologi dan tools yang saya kuasai untuk membangun solusi digital</p>
            </div>
            <div class="skills-grid">
                <div class="skill-card scroll-animate">
                    <div class="skill-icon"><i class="fas fa-code"></i></div>
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
                    <div class="skill-icon"><i class="fas fa-server"></i></div>
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
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h3>Database</h3>
                    <ul class="skill-list">
                        <li>MySQL</li>
                        <li>Database Design</li>
                        <li>Query Optimization</li>
                        <li>Data Modeling</li>
                    </ul>
                </div>
                <div class="skill-card scroll-animate">
                    <div class="skill-icon"><i class="fas fa-tools"></i></div>
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
                <p class="section-description">Karakteristik dan nilai-nilai yang saya miliki</p>
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

    <!-- Certificates Section -->
    <section id="certificates">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Credentials</span>
                <h2 class="section-title">Certificates & Achievements</h2>
                <p class="section-description">Sertifikasi dan pengakuan kompetensi profesional</p>
            </div>
            <div class="projects-grid">
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-award"></i></div>
                    <div class="project-info">
                        <h3>Sertifikasi Kompetensi Software Development</h3>
                        <p>Dinyatakan <strong>Kompeten</strong> dalam bidang pengembangan perangkat lunak sesuai standar nasional.</p>
                        <div class="project-tags">
                            <span class="tag">BNSP</span>
                            <span class="tag">2024</span>
                        </div>
                    </div>
                </div>
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-database"></i></div>
                    <div class="project-info">
                        <h3>Database Systems Certification</h3>
                        <p>Sertifikat profisiensi sistem basis data dengan predikat <strong>EXPERT</strong>.</p>
                        <div class="project-tags">
                            <span class="tag">IAII</span>
                            <span class="tag">2023</span>
                        </div>
                    </div>
                </div>
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-certificate"></i></div>
                    <div class="project-info">
                        <h3>Sertifikat Internship IT Support</h3>
                        <p>Fokus pada pengelolaan data, IT Support, dan layanan informasi publik.</p>
                        <div class="project-tags">
                            <span class="tag">DPRD Kota Tegal</span>
                            <span class="tag">2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organization Section -->
    <section id="organization">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Activities</span>
                <h2 class="section-title">Organization & Volunteer Experience</h2>
                <p class="section-description">Pengalaman organisasi dan kegiatan sosial</p>
            </div>
            <div class="timeline">
                <div class="timeline-item scroll-animate">
                    <div class="timeline-content">
                        <span class="timeline-date">Februari 2024</span>
                        <h3>Saksi Pemilu (TPS)</h3>
                        <h4>Penyelenggara Pemilihan Umum</h4>
                        <p>Bertugas melakukan pengawasan proses pemungutan dan penghitungan suara dengan penuh ketelitian dan integritas.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-content">
                        <span class="timeline-date">November 2022</span>
                        <h3>Tim Sosialisasi Kampus</h3>
                        <h4>Universitas Bina Sarana Informatika</h4>
                        <p>Melakukan presentasi dan sosialisasi kampus ke SMA/MA, melatih kemampuan public speaking dan kerja tim.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-content">
                        <span class="timeline-date">2020</span>
                        <h3>Petugas Jaga Malam (Linmas)</h3>
                        <h4>Desa Kemandungan, Kota Tegal</h4>
                        <p>Menjaga keamanan lingkungan melalui patroli malam dan koordinasi tim.</p>
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
                <p class="section-description">Beberapa proyek yang telah saya kerjakan</p>
            </div>
            <div class="projects-grid">
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-calendar-check"></i></div>
                    <div class="project-info">
                        <h3>Sistem Informasi Absensi</h3>
                        <p>Aplikasi web untuk mengelola absensi karyawan dengan fitur real-time monitoring, laporan, dan dashboard analytics.</p>
                        <div class="project-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                        </div>
                    </div>
                </div>
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-shopping-cart"></i></div>
                    <div class="project-info">
                        <h3>E-Commerce Platform</h3>
                        <p>Platform jual-beli online dengan fitur shopping cart, payment gateway integration, dan order management.</p>
                        <div class="project-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="project-card scroll-animate">
                    <div class="project-image"><i class="fas fa-building"></i></div>
                    <div class="project-info">
                        <h3>Company Profile</h3>
                        <p>Website profil perusahaan responsif dengan CMS untuk update konten, portfolio showcase, dan contact form.</p>
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
                <a href="mailto:alerascal77@gmail.com" class="social-link"><i class="fas fa-envelope"></i></a>
                <a href="https://github.com/alerascal" class="social-link" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com" class="social-link" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://wa.me/6282220668915" class="social-link" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
            <p class="footer-text">
                © 2026 Moh. Sahrul Alamsyah • <span class="footer-highlight">Ready to Innovate & Contribute</span>
            </p>
        </div>
    </footer>

    <script>
        // Generate stars
        const starsContainer = document.getElementById("stars");
        for (let i = 0; i < 150; i++) {
            const star = document.createElement("div");
            star.className = "star";
            star.style.left = Math.random() * 100 + "%";
            star.style.top = Math.random() * 100 + "%";
            star.style.animationDelay = Math.random() * 3 + "s";
            starsContainer.appendChild(star);
        }

        // Typing effect
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

        function type() {
            const currentText = texts[textIndex];
            const typingSpeed = isDeleting ? 50 : 100;

            if (isDeleting) {
                typingElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentText.length) {
                setTimeout(() => (isDeleting = true), 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }

            setTimeout(type, typingSpeed);
        }

        setTimeout(type, 1000);

        // Mobile menu
        const menuToggle = document.getElementById("menuToggle");
        const navLinks = document.getElementById("navLinks");

        menuToggle.addEventListener("click", () => {
            menuToggle.classList.toggle("active");
            navLinks.classList.toggle("active");
        });

        navLinks.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                menuToggle.classList.remove("active");
                navLinks.classList.remove("active");
            });
        });

        document.addEventListener("click", (e) => {
            if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
                menuToggle.classList.remove("active");
                navLinks.classList.remove("active");
            }
        });

        // Scroll animations
        const scrollElements = document.querySelectorAll(".scroll-animate");

        const elementInView = (el, offset = 80) => {
            const elementTop = el.getBoundingClientRect().top;
            return elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset;
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 80)) {
                    el.classList.add("active");
                }
            });
        };

        window.addEventListener("scroll", handleScrollAnimation);
        handleScrollAnimation();

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({ behavior: "smooth", block: "start" });
                }
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>