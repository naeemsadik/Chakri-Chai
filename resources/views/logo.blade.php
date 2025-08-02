<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chakri Chai - Job Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e6fffa 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .logo-container {
            max-width: 800px;
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(4, 120, 87, 0.2);
            overflow: hidden;
        }
        .logo-display {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 3rem;
            background: linear-gradient(to bottom right, #f0fdf4, #ecfeff);
        }
        .logo-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
            background: #f8fafc;
        }
        .option-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .option-card:hover {
            transform: translateY(-10px);
        }
        .color-swatch {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .color-info {
            padding: 1.5rem;
        }
        .usage-examples {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
            padding: 2rem;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        .example {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            min-width: 200px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .logo-title {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo-title h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #047857;
            margin-bottom: 0.5rem;
        }
        .logo-title p {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="logo-title">
        <h1>Chakri Chai Job Portal</h1>
        <p>Professional Logo Design for Bangladesh's Premier Job Platform</p>
    </div>
    
    <div class="logo-container">
        <div class="logo-display">
            <!-- Main Logo SVG -->
            <svg width="380" height="220" viewBox="0 0 380 220" xmlns="http://www.w3.org/2000/svg">
                <!-- Bangladesh Map Outline -->
                <path d="M80,120 Q90,110 100,115 Q110,120 120,115 Q130,110 140,115 Q150,120 160,115 Q170,110 180,115 Q190,120 200,115 Q210,110 220,115 Q230,120 240,115 Q250,110 260,115 Q270,120 280,115 Q290,110 300,115 Q310,120 320,115 L320,135 Q310,140 300,135 Q290,130 280,135 Q270,140 260,135 Q250,130 240,135 Q230,140 220,135 Q210,130 200,135 Q190,140 180,135 Q170,130 160,135 Q150,140 140,135 Q130,130 120,135 Q110,140 100,135 Q90,130 80,135 Z" fill="#047857" fill-opacity="0.08" stroke="#047857" stroke-width="0.5" stroke-opacity="0.2"/>
                
                <!-- Briefcase Body -->
                <rect x="150" y="80" width="80" height="50" rx="5" fill="#059669" stroke="#047857" stroke-width="2"/>
                
                <!-- Briefcase Top -->
                <rect x="145" y="70" width="90" height="15" rx="5" fill="#10B981" stroke="#047857" stroke-width="2"/>
                
                <!-- Handle -->
                <path d="M160 70 Q190 60 220 70" stroke="#047857" stroke-width="3" fill="none"/>
                
                <!-- Shapla/Water Lily (National Flower) -->
                <!-- Petals -->
                <path d="M190,60 C195,50 200,48 205,50 C210,55 208,60 205,62 C200,65 195,65 190,60 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8"/>
                <path d="M190,60 C185,55 183,50 185,45 C190,40 195,42 197,45 C198,50 195,55 190,60 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8"/>
                <path d="M190,60 C195,65 200,68 205,65 C210,62 212,57 210,53 C207,50 202,50 198,53 C195,55 193,58 190,60 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8"/>
                <path d="M190,60 C185,65 180,68 175,65 C170,62 168,57 170,53 C173,50 178,50 182,53 C185,55 187,58 190,60 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8"/>
                
                <!-- Flower Center -->
                <circle cx="190" cy="60" r="5" fill="#D97706" stroke="#B45309" stroke-width="0.5"/>
                
                <!-- Text: Chakri Chai in Bengali -->
                <g transform="translate(100, 170)" font-family="Arial" font-weight="bold">
                    <text x="90" y="20" font-size="28" text-anchor="middle" fill="#047857">চাকরি চাই</text>
                    <text x="90" y="45" font-size="14" text-anchor="middle" fill="#64748b">Find Your Dream Job</text>
                </g>
            </svg>
            
            <p class="mt-6 text-gray-600 max-w-lg text-center">
                This logo combines a briefcase (symbolizing employment) with the Shapla flower (national flower of Bangladesh), 
                placed within a subtle outline of Bangladesh. The Bengali text "চাকরি চাই" (I want a job) is prominently featured 
                with an English tagline.
            </p>
        </div>
        
        <div class="logo-options">
            <div class="option-card">
                <div class="color-swatch" style="background-color: #047857;">
                    <svg width="120" height="80" viewBox="0 0 200 100">
                        <rect x="40" y="30" width="40" height="30" rx="3" fill="white"/>
                        <rect x="35" y="20" width="50" height="15" rx="3" fill="white"/>
                        <path d="M45 20 Q70 10 95 20" stroke="white" stroke-width="3" fill="none"/>
                        <g transform="translate(70, 10)">
                            <circle cx="0" cy="0" r="5" fill="#FDE68A"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(0)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(72)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(144)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(216)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(288)"/>
                        </g>
                        <text x="100" y="70" font-family="Arial" font-size="16" text-anchor="middle" fill="white">চাকরি চাই</text>
                    </svg>
                </div>
                <div class="color-info">
                    <h3 class="font-bold text-lg mb-2">Dark on Light</h3>
                    <p class="text-gray-600 text-sm">Primary color scheme for most applications</p>
                    <div class="mt-3 flex items-center">
                        <div class="w-4 h-4 rounded-full mr-2" style="background-color: #047857;"></div>
                        <span class="text-sm">#047857</span>
                    </div>
                </div>
            </div>
            
            <div class="option-card">
                <div class="color-swatch" style="background-color: #047857;">
                    <svg width="120" height="80" viewBox="0 0 200 100">
                        <rect x="40" y="30" width="40" height="30" rx="3" fill="#FDE68A"/>
                        <rect x="35" y="20" width="50" height="15" rx="3" fill="#FDE68A"/>
                        <path d="M45 20 Q70 10 95 20" stroke="#FDE68A" stroke-width="3" fill="none"/>
                        <g transform="translate(70, 10)">
                            <circle cx="0" cy="0" r="5" fill="#047857"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#047857" transform="rotate(0)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#047857" transform="rotate(72)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#047857" transform="rotate(144)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#047857" transform="rotate(216)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#047857" transform="rotate(288)"/>
                        </g>
                        <text x="100" y="70" font-family="Arial" font-size="16" text-anchor="middle" fill="white">চাকরি চাই</text>
                    </svg>
                </div>
                <div class="color-info">
                    <h3 class="font-bold text-lg mb-2">Reversed on Dark</h3>
                    <p class="text-gray-600 text-sm">For dark backgrounds and promotional materials</p>
                    <div class="mt-3 flex items-center">
                        <div class="w-4 h-4 rounded-full mr-2" style="background-color: #FDE68A;"></div>
                        <span class="text-sm">#FDE68A</span>
                    </div>
                </div>
            </div>
            
            <div class="option-card">
                <div class="color-swatch" style="background-color: #ffffff;">
                    <svg width="120" height="80" viewBox="0 0 200 100">
                        <rect x="40" y="30" width="40" height="30" rx="3" fill="#047857" stroke="#047857" stroke-width="1.5"/>
                        <rect x="35" y="20" width="50" height="15" rx="3" fill="#059669" stroke="#047857" stroke-width="1.5"/>
                        <path d="M45 20 Q70 10 95 20" stroke="#047857" stroke-width="3" fill="none"/>
                        <g transform="translate(70, 10)">
                            <circle cx="0" cy="0" r="5" fill="#D97706"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8" transform="rotate(0)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8" transform="rotate(72)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8" transform="rotate(144)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8" transform="rotate(216)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" stroke="#F59E0B" stroke-width="0.8" transform="rotate(288)"/>
                        </g>
                        <text x="100" y="70" font-family="Arial" font-size="16" text-anchor="middle" fill="#047857">চাকরি চাই</text>
                    </svg>
                </div>
                <div class="color-info">
                    <h3 class="font-bold text-lg mb-2">Single Color</h3>
                    <p class="text-gray-600 text-sm">For minimal applications and printing</p>
                    <div class="mt-3 flex items-center">
                        <div class="w-4 h-4 rounded-full mr-2" style="background-color: #047857;"></div>
                        <span class="text-sm">#047857</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="usage-examples">
            <div class="example">
                <div class="w-16 h-16 mx-auto mb-3">
                    <svg width="64" height="64" viewBox="0 0 100 100">
                        <rect x="30" y="50" width="40" height="30" rx="3" fill="#047857"/>
                        <rect x="25" y="40" width="50" height="15" rx="3" fill="#059669"/>
                        <path d="M35 40 Q50 30 65 40" stroke="#047857" stroke-width="3" fill="none"/>
                        <g transform="translate(50, 30)">
                            <circle cx="0" cy="0" r="5" fill="#D97706"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(0)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(72)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(144)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(216)"/>
                            <path d="M0,0 C7,-8 13,-8 20,0 C13,8 7,8 0,0 Z" fill="#FDE68A" transform="rotate(288)"/>
                        </g>
                    </svg>
                </div>
                <h4 class="font-bold">App Icon</h4>
            </div>
            
            <div class="example">
                <div class="bg-emerald-600 w-32 h-10 rounded flex items-center justify-center mx-auto mb-3">
                    <svg width="100" height="24" viewBox="0 0 200 40">
                        <g transform="translate(20, 20)">
                            <rect x="0" y="0" width="15" height="10" rx="2" fill="white"/>
                            <rect x="-2" y="-7" width="19" height="5" rx="2" fill="#A7F3D0"/>
                            <path d="M2 -7 Q7.5 -12 13 -7" stroke="white" stroke-width="2" fill="none"/>
                            <g transform="translate(7.5, -15)">
                                <circle cx="0" cy="0" r="2" fill="#FDE68A"/>
                                <path d="M0,0 C2,-3 3.5,-3 5,0 C3.5,3 2,3 0,0 Z" fill="#FDE68A" transform="rotate(0)"/>
                                <path d="M0,0 C2,-3 3.5,-3 5,0 C3.5,3 2,3 0,0 Z" fill="#FDE68A" transform="rotate(72)"/>
                                <path d="M0,0 C2,-3 3.5,-3 5,0 C3.5,3 2,3 0,0 Z" fill="#FDE68A" transform="rotate(144)"/>
                                <path d="M0,0 C2,-3 3.5,-3 5,0 C3.5,3 2,3 0,0 Z" fill="#FDE68A" transform="rotate(216)"/>
                                <path d="M0,0 C2,-3 3.5,-3 5,0 C3.5,3 2,3 0,0 Z" fill="#FDE68A" transform="rotate(288)"/>
                            </g>
                        </g>
                        <text x="40" y="20" font-family="Arial" font-size="14" fill="white">চাকরি চাই</text>
                    </svg>
                </div>
                <h4 class="font-bold">Navigation Bar</h4>
            </div>
            
            <div class="example">
                <div class="bg-white p-3 rounded border mx-auto mb-3">
                    <svg width="120" height="40" viewBox="0 0 200 60">
                        <rect x="10" y="20" width="25" height="15" rx="2" fill="#047857"/>
                        <rect x="8" y="15" width="29" height="8" rx="2" fill="#059669"/>
                        <path d="M12 15 Q23 10 34 15" stroke="#047857" stroke-width="2" fill="none"/>
                        <g transform="translate(23, 8)">
                            <circle cx="0" cy="0" r="3" fill="#D97706"/>
                            <path d="M0,0 C4,-5 7,-5 10,0 C7,5 4,5 0,0 Z" fill="#FDE68A" transform="rotate(0)"/>
                            <path d="M0,0 C4,-5 7,-5 10,0 C7,5 4,5 0,0 Z" fill="#FDE68A" transform="rotate(72)"/>
                            <path d="M0,0 C4,-5 7,-5 10,0 C7,5 4,5 0,0 Z" fill="#FDE68A" transform="rotate(144)"/>
                            <path d="M0,0 C4,-5 7,-5 10,0 C7,5 4,5 0,0 Z" fill="#FDE68A" transform="rotate(216)"/>
                            <path d="M0,0 C4,-5 7,-5 10,0 C7,5 4,5 0,0 Z" fill="#FDE68A" transform="rotate(288)"/>
                        </g>
                        <text x="60" y="35" font-family="Arial" font-size="14" fill="#047857">চাকরি চাই</text>
                    </svg>
                </div>
                <h4 class="font-bold">Business Card</h4>
            </div>
        </div>
    </div>
    
    <div class="mt-8 max-w-2xl text-center text-gray-600">
        <h3 class="font-bold text-xl text-emerald-700 mb-3">Logo Design Elements</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h4 class="font-bold text-emerald-600 mb-2">Briefcase Symbol</h4>
                <p>Represents employment, career opportunities, and professionalism. The open design suggests accessibility and opportunity.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h4 class="font-bold text-emerald-600 mb-2">Shapla Flower</h4>
                <p>National flower of Bangladesh, symbolizing purity and resilience. Represents growth and Bangladeshi heritage.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h4 class="font-bold text-emerald-600 mb-2">Bengali Script</h4>
                <p>"চাকরি চাই" meaning "I want a job" - clear, direct, and culturally relevant for the target audience.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h4 class="font-bold text-emerald-600 mb-2">Color Scheme</h4>
                <p>Emerald green represents growth and prosperity, while gold accents symbolize success and quality.</p>
            </div>
        </div>
    </div>
</body>
</html>