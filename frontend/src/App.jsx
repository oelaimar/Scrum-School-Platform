import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
    return (
        // 1. The Container (Flex Column)
        <div className="flex flex-col min-h-screen font-sans antialiased text-gray-900">

            {/* Header */}
            <header className="bg-white shadow-sm sticky top-0 z-50">
                <nav className="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
                    <h1 className="text-2xl font-bold text-blue-600">My App</h1>
                    <button className="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Login
                    </button>
                </nav>
            </header>

            {/* Main Content Area (Flex Row for Sidebar) */}
            <div className="flex flex-1 max-w-7xl mx-auto w-full px-4 py-6 gap-6">

                {/* Sidebar */}
                <aside className="w-64 bg-white p-4 rounded-lg shadow-sm hidden md:block">
                    <ul className="space-y-2">
                        <li className="font-semibold text-blue-700">Dashboard</li>
                        <li className="text-gray-600 hover:text-blue-500 cursor-pointer">Projects</li>
                        <li className="text-gray-600 hover:text-blue-500 cursor-pointer">Settings</li>
                    </ul>
                </aside>

                {/* Content Panel */}
                <main className="flex-1 bg-white p-6 rounded-lg shadow-sm">
                    <h2 className="text-xl font-semibold mb-4">Welcome Back!</h2>
                    <p className="text-gray-600">This is your main content area.</p>
                </main>
            </div>

            {/* Footer */}
            <footer className="bg-gray-100 mt-auto">
                <div className="max-w-7xl mx-auto px-4 py-4 text-center text-gray-500 text-sm">
                    © 2026 My App Inc.
                </div>
            </footer>
        </div>
    )
}

export default App
