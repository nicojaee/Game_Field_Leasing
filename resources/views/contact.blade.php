@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative h-96 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-6xl font-bold mb-4">Get In Touch</h1>
        <p class="text-2xl text-gray-100">We're Here to Help</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contact Form -->
        <div class="lg:col-span-2">
            <div class="bg-gray-900 rounded-xl p-10 border border-red-600 shadow-2xl">
                <h2 class="text-3xl font-bold mb-8 text-red-500">Send us a Message</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Name</label>
                            <input type="text" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Email</label>
                            <input type="email" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Phone</label>
                            <input type="tel" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="+1 (555) 000-0000">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Subject</label>
                            <select class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none">
                                <option>General Inquiry</option>
                                <option>Booking Issue</option>
                                <option>Partnership</option>
                                <option>Feedback</option>
                                <option>Support</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-300 font-semibold mb-3">Message</label>
                        <textarea class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" rows="6" placeholder="Tell us what's on your mind..."></textarea>
                    </div>

                    <div class="flex items-center gap-3">
                        <input type="checkbox" id="consent" class="w-5 h-5">
                        <label for="consent" class="text-gray-400">I agree to be contacted about my inquiry</label>
                    </div>

                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-lg transition text-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="space-y-6">
            <div class="bg-gray-900 rounded-xl p-8 border border-gray-700">
                <h3 class="text-2xl font-bold mb-4 text-red-500">📍 Location</h3>
                <p class="text-gray-300">123 Sports Avenue<br>City Center, ST 12345</p>
            </div>

            <div class="bg-gray-900 rounded-xl p-8 border border-gray-700">
                <h3 class="text-2xl font-bold mb-4 text-red-500">📞 Phone</h3>
                <p class="text-gray-300">+1 (555) 123-4567<br><span class="text-sm text-gray-400">Mon-Fri, 9AM-6PM</span></p>
            </div>

            <div class="bg-gray-900 rounded-xl p-8 border border-gray-700">
                <h3 class="text-2xl font-bold mb-4 text-red-500">📧 Email</h3>
                <p class="text-gray-300">support@gamefield.com<br><span class="text-sm text-gray-400">We reply within 24 hours</span></p>
            </div>

            <div class="bg-gray-900 rounded-xl p-8 border border-gray-700">
                <h3 class="text-2xl font-bold mb-4 text-red-500">🕐 Hours</h3>
                <p class="text-gray-300">Mon-Fri: 9AM-6PM<br>Sat: 10AM-4PM<br>Sun: Closed</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-gray-900 py-20">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <details class="bg-black rounded-lg border border-gray-700 p-6 cursor-pointer group">
                <summary class="font-bold text-lg flex justify-between items-center">
                    How do I make a booking?
                    <span class="text-red-500 group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-400 mt-4">Simply navigate to our booking page, select your preferred field, date, and time. Fill in your contact details and confirm your reservation. You'll receive a confirmation email immediately.</p>
            </details>

            <details class="bg-black rounded-lg border border-gray-700 p-6 cursor-pointer group">
                <summary class="font-bold text-lg flex justify-between items-center">
                    What's your cancellation policy?
                    <span class="text-red-500 group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-400 mt-4">Cancellations made 24 hours before your booking receive a full refund. Cancellations within 24 hours may have a 20% service fee. No-shows forfeit the entire payment.</p>
            </details>

            <details class="bg-black rounded-lg border border-gray-700 p-6 cursor-pointer group">
                <summary class="font-bold text-lg flex justify-between items-center">
                    Do you offer discounts for regular bookings?
                    <span class="text-red-500 group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-400 mt-4">Yes! We offer monthly passes with 20% discount for regular players. Teams booking 10+ hours per month get special rates. Contact us for custom pricing options.</p>
            </details>

            <details class="bg-black rounded-lg border border-gray-700 p-6 cursor-pointer group">
                <summary class="font-bold text-lg flex justify-between items-center">
                    Can I host events or tournaments?
                    <span class="text-red-500 group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-400 mt-4">Absolutely! We support corporate events, tournaments, and community sports activities. For large events, please contact our events team for customized packages and pricing.</p>
            </details>

            <details class="bg-black rounded-lg border border-gray-700 p-6 cursor-pointer group">
                <summary class="font-bold text-lg flex justify-between items-center">
                    What payment methods do you accept?
                    <span class="text-red-500 group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-400 mt-4">We accept all major credit cards, debit cards, digital wallets (Apple Pay, Google Pay), and bank transfers. All payments are secure and encrypted.</p>
            </details>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-red-600 to-red-800 py-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4 text-white">Ready to Book Your Field?</h2>
        <p class="text-xl text-gray-100 mb-8">Join thousands of sports enthusiasts who trust Game Field Leasing for their booking needs.</p>
        <a href="/booking" class="inline-block bg-black hover:bg-gray-900 text-red-500 font-bold py-4 px-10 rounded-lg text-lg transition">
            Start Booking Now
        </a>
    </div>
</div>

@endsection
