<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Bungalow Booking Complete With Full Multi-Slide Lightbox
 */

get_header();

get_template_part( 'template-parts/page-banner' );

// Complete 32 Circuit Bungalows across 9 Provinces with Full Details & Nearby Attractions
$provinces = [
    [
        'name' => 'Western Province',
        'slug' => 'western',
        'bungalows' => [
            [
                'id' => 'colombo', 'slug' => 'colombo-circuit-bunglow', 'name' => 'Colombo Circuit Bungalow', 'location' => 'Colombo 07', 'address' => 'Independence Avenue, Colombo 07', 'capacity' => '5 Rooms (15 Guests)', 'rate' => 'LKR 500 - 1,000 / Night', 'keeper' => 'Caretaker Officer', 'tel' => '+94 11 286 1489', 'email' => 'info@moha.gov.lk',
                'description' => 'The Colombo Circuit Bungalow is located in the heart of Colombo 07, providing convenient, comfortable, and secure accommodation for government officials and public sector officers visiting the capital city.',
                'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1200&q=80'
                ],
                'rooms' => [
                    [ 'type' => 'VIP Executive Suite (AC)', 'beds' => '1 King Bed (Max 2 Persons)', 'rate' => 'LKR 2,500 / Night', 'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80' ],
                    [ 'type' => 'Deluxe Double Room (AC)', 'beds' => '1 Double Bed (Max 2 Persons)', 'rate' => 'LKR 1,800 / Night', 'image' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=800&q=80' ],
                    [ 'type' => 'Family Room (AC)', 'beds' => '2 Double Beds (Max 4 Persons)', 'rate' => 'LKR 2,200 / Night', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
                    [ 'type' => 'Standard Officer Room (Non-AC)', 'beds' => '1 Single Bed (Max 1 Person)', 'rate' => 'LKR 1,000 / Night', 'image' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&fit=crop&w=800&q=80' ]
                ],
                'nearby_places' => [
                    [ 'title' => 'Independence Memorial Hall', 'distance' => '0.5 km (5 mins away)', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
                    [ 'title' => 'Lotus Tower & Galle Face Green', 'distance' => '3.5 km (10 mins away)', 'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80' ],
                    [ 'title' => 'Gangaramaya Temple & Beira Lake', 'distance' => '2.0 km (8 mins away)', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ]
                ]
            ],
            [
                'id' => 'gampaha', 'slug' => 'gampaha-circuit-bunglow', 'name' => 'Gampaha Circuit Bungalow', 'location' => 'Gampaha', 'address' => 'Main St, Gampaha', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'District Secretariat', 'tel' => '+94 33 222 2222', 'email' => 'gampaha@moha.gov.lk',
                'description' => 'A peaceful retreat situated in Gampaha district, ideal for state officials seeking a calm environment.',
                'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80',
                'gallery' => ['https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80'],
                'rooms' => [
                    [ 'type' => 'Deluxe Room (AC)', 'beds' => '1 Double Bed (Max 2 Persons)', 'rate' => 'LKR 1,500 / Night', 'image' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=800&q=80' ],
                    [ 'type' => 'Standard Room (Non-AC)', 'beds' => '1 Double Bed (Max 2 Persons)', 'rate' => 'LKR 800 / Night', 'image' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&fit=crop&w=800&q=80' ]
                ],
                'nearby_places' => [
                    [ 'title' => 'Gampaha Botanical Garden', 'distance' => '1.2 km (5 mins away)', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ]
                ]
            ],
            [
                'id' => 'kalutara', 'slug' => 'kalutara-holiday-home', 'name' => 'Kalutara Holiday Home', 'location' => 'Kalutara', 'address' => 'Beach Rd, Kalutara', 'capacity' => '4 Rooms (12 Guests)', 'rate' => 'LKR 500 - 900 / Night', 'keeper' => 'Caretaker', 'tel' => '+94 34 222 1111', 'email' => 'kalutara@moha.gov.lk',
                'description' => 'Scenic coastal holiday home in Kalutara providing excellent hospitality.',
                'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80',
                'gallery' => ['https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80'],
                'rooms' => [
                    [ 'type' => 'Ocean Suite', 'beds' => '1 King Bed (Max 2 Persons)', 'rate' => 'LKR 1,800 / Night', 'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80' ]
                ],
                'nearby_places' => [
                    [ 'title' => 'Kalutara Bodhiya & Beach', 'distance' => '1.0 km (3 mins away)', 'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80' ]
                ]
            ],
            [
                'id' => 'negombo', 'slug' => 'negombo-beach-bunglow', 'name' => 'Negombo Beach Bungalow', 'location' => 'Negombo', 'address' => 'Beach Rd, Negombo', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 600 - 1100 / Night', 'keeper' => 'Mr. Perera', 'tel' => '+94 31 222 3333', 'email' => 'negombo@moha.gov.lk',
                'description' => 'Beachfront property near Negombo tourist hub.',
                'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80',
                'gallery' => ['https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80'],
                'rooms' => [], 'nearby_places' => []
            ],
        ]
    ],
    [
        'name' => 'Central Province',
        'slug' => 'central',
        'bungalows' => [
            [
                'id' => 'kandy', 'slug' => 'kandy-circuit-bunglow', 'name' => 'Kandy Circuit Bungalow', 'location' => 'Kandy', 'address' => 'Bahirawakanda, Kandy', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 300 - 500 / Night', 'keeper' => 'Mr. Vajira Bandara', 'tel' => '077-6941109', 'email' => 'kandy@moha.gov.lk',
                'description' => 'Overlooking Kandy city with serene mountain views.',
                'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80',
                'gallery' => ['https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80'],
                'rooms' => [], 'nearby_places' => []
            ],
            [
                'id' => 'nuwara-eliya', 'slug' => 'nuwara-eliya-circuit-bunglow', 'name' => 'Nuwara Eliya Circuit Bungalow', 'location' => 'Nuwara Eliya', 'address' => 'Craton Village Road, Nuwara Eliya', 'capacity' => '6 Rooms (18 Guests)', 'rate' => 'LKR 350 - 550 / Night', 'keeper' => 'Mr. A. Ekanayaka', 'tel' => '052-2235399', 'email' => 'nuwaraeliya@moha.gov.lk',
                'description' => 'Cool climate heritage bungalow in Nuwara Eliya.',
                'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80',
                'gallery' => [], 'rooms' => [], 'nearby_places' => []
            ],
            [ 'id' => 'matale', 'slug' => 'matale-holiday-rest', 'name' => 'Matale Holiday Rest', 'location' => 'Matale', 'address' => 'Rock Hill, Matale', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 400 - 600 / Night', 'keeper' => 'Mr. Bandara', 'tel' => '066-2222111', 'email' => 'matale@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'hatton', 'slug' => 'hatton-circuit-bunglow', 'name' => 'Hatton Circuit Bungalow', 'location' => 'Hatton', 'address' => 'Station Rd, Hatton', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 450 - 850 / Night', 'keeper' => 'Mr. Dissanayake', 'tel' => '051-2222333', 'email' => 'hatton@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'dambulla', 'slug' => 'dambulla-heritage-rest', 'name' => 'Dambulla Heritage Rest', 'location' => 'Dambulla', 'address' => 'Temple Rd, Dambulla', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Ranatunga', 'tel' => '066-2284111', 'email' => 'dambulla@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'Southern Province',
        'slug' => 'southern',
        'bungalows' => [
            [ 'id' => 'kataragama', 'slug' => 'kataragama-circuit-bunglow', 'name' => 'Kataragama Circuit Bungalow', 'location' => 'Kataragama', 'address' => 'Depot Road, Kataragama', 'capacity' => '5 Rooms (13 Guests)', 'rate' => 'LKR 800 - 1500 / Night', 'keeper' => 'Mr. H.W. Karunarathne', 'tel' => '071-6191639', 'email' => 'hambantota@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'galle', 'slug' => 'galle-fort-circuit-bunglow', 'name' => 'Galle Fort Circuit Bungalow', 'location' => 'Galle', 'address' => 'Fort, Galle', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 600 - 1200 / Night', 'keeper' => 'Mr. Gamage', 'tel' => '091-2234111', 'email' => 'galle@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'matara', 'slug' => 'matara-circuit-rest', 'name' => 'Matara Circuit Rest', 'location' => 'Matara', 'address' => 'Beach Road, Matara', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 450 - 900 / Night', 'keeper' => 'Mr. Silva', 'tel' => '041-2223344', 'email' => 'matara@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'hikkaduwa', 'slug' => 'hikkaduwa-beach-rest', 'name' => 'Hikkaduwa Beach Rest', 'location' => 'Hikkaduwa', 'address' => 'Galle Rd, Hikkaduwa', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 500 - 1000 / Night', 'keeper' => 'Mr. De Silva', 'tel' => '091-2277111', 'email' => 'hikkaduwa@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'Northern Province',
        'slug' => 'northern',
        'bungalows' => [
            [ 'id' => 'jaffna', 'slug' => 'jaffna-heritage-bunglow', 'name' => 'Jaffna Heritage Bungalow', 'location' => 'Jaffna', 'address' => 'Main St, Jaffna', 'capacity' => '5 Rooms (12 Guests)', 'rate' => 'LKR 500 - 1000 / Night', 'keeper' => 'Caretaker', 'tel' => '+94 21 222 2222', 'email' => 'jaffna@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'vavuniya', 'slug' => 'vavuniya-circuit-bunglow', 'name' => 'Vavuniya Circuit Bungalow', 'location' => 'Vavuniya', 'address' => 'Station Rd, Vavuniya', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 350 - 700 / Night', 'keeper' => 'Mr. Nathan', 'tel' => '+94 24 222 1111', 'email' => 'vavuniya@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'mannar', 'slug' => 'mannar-island-rest', 'name' => 'Mannar Island Rest', 'location' => 'Mannar', 'address' => 'Causeway Rd, Mannar', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 400 - 750 / Night', 'keeper' => 'Mr. Selvam', 'tel' => '+94 23 222 3333', 'email' => 'mannar@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'point-pedro', 'slug' => 'point-pedro-seaside-rest', 'name' => 'Point Pedro Seaside Rest', 'location' => 'Point Pedro', 'address' => 'Coast Rd, Point Pedro', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Sivan', 'tel' => '+94 21 226 1111', 'email' => 'pointpedro@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'Eastern Province',
        'slug' => 'eastern',
        'bungalows' => [
            [ 'id' => 'trincomalee', 'slug' => 'trincomalee-circuit-bunglow', 'name' => 'Trincomalee Circuit Bungalow', 'location' => 'Trincomalee', 'address' => 'Nilaveli Road, Trincomalee', 'capacity' => '5 Rooms (A/C & Non-A/C)', 'rate' => 'LKR 750 / Room', 'keeper' => 'Caretaker Officer', 'tel' => '+94 26 222 2261', 'email' => 'trinco@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'batticaloa', 'slug' => 'batticaloa-lagoon-bunglow', 'name' => 'Batticaloa Lagoon Bungalow', 'location' => 'Batticaloa', 'address' => 'Lady Manning Dr, Batticaloa', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 500 - 900 / Night', 'keeper' => 'Mr. Farook', 'tel' => '+94 65 222 2222', 'email' => 'batticaloa@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'ampara', 'slug' => 'ampara-circuit-bunglow', 'name' => 'Ampara Circuit Bungalow', 'location' => 'Ampara', 'address' => 'Inginiyagala Rd, Ampara', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 450 - 850 / Night', 'keeper' => 'Mr. Jayasundara', 'tel' => '+94 63 222 1111', 'email' => 'ampara@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'arugam-bay', 'slug' => 'arugam-bay-circuit-rest', 'name' => 'Arugam Bay Circuit Rest', 'location' => 'Pottuvil', 'address' => 'Main St, Arugam Bay', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 500 - 1000 / Night', 'keeper' => 'Mr. Rizwan', 'tel' => '+94 63 224 8111', 'email' => 'arugambay@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'North Central Province',
        'slug' => 'north-central',
        'bungalows' => [
            [ 'id' => 'anuradhapura', 'slug' => 'anuradhapura-circuit-bunglow', 'name' => 'Anuradhapura Circuit Bungalow', 'location' => 'Anuradhapura', 'address' => 'Thissa Mawatha, Anuradhapura', 'capacity' => '10 Rooms (30 Guests)', 'rate' => 'LKR 300 - 500 / Night', 'keeper' => 'Mr. Madusanka', 'tel' => '025-2225135', 'email' => 'anuradhapura@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'polonnaruwa', 'slug' => 'polonnaruwa-heritage-bunglow', 'name' => 'Polonnaruwa Heritage Bungalow', 'location' => 'Polonnaruwa', 'address' => 'New Town, Polonnaruwa', 'capacity' => '5 Rooms (12 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Gunawardena', 'tel' => '027-2222111', 'email' => 'polonnaruwa@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'North Western Province',
        'slug' => 'north-western',
        'bungalows' => [
            [ 'id' => 'kurunegala', 'slug' => 'kurunegala-lake-bunglow', 'name' => 'Kurunegala Lake Bungalow', 'location' => 'Kurunegala', 'address' => 'Lake Round, Kurunegala', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Herath', 'tel' => '037-2222111', 'email' => 'kurunegala@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'puttalam', 'slug' => 'puttalam-beach-rest', 'name' => 'Puttalam Beach Rest', 'location' => 'Puttalam', 'address' => 'Beach Rd, Puttalam', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 350 - 700 / Night', 'keeper' => 'Mr. Fernando', 'tel' => '032-2222111', 'email' => 'puttalam@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'chilaw', 'slug' => 'chilaw-coastal-rest', 'name' => 'Chilaw Coastal Rest', 'location' => 'Chilaw', 'address' => 'Sea St, Chilaw', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Cooray', 'tel' => '032-2224111', 'email' => 'chilaw@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'Uva Province',
        'slug' => 'uva',
        'bungalows' => [
            [ 'id' => 'badulla', 'slug' => 'badulla-circuit-bunglow', 'name' => 'Badulla Circuit Bungalow', 'location' => 'Badulla', 'address' => 'Secretariat Rd, Badulla', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Rathnayake', 'tel' => '055-2222111', 'email' => 'badulla@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'bandarawela', 'slug' => 'bandarawela-holiday-resort', 'name' => 'Bandarawela Holiday Resort', 'location' => 'Bandarawela', 'address' => 'Main St, Bandarawela', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 450 - 900 / Night', 'keeper' => 'Mr. Jayawardena', 'tel' => '057-2222111', 'email' => 'bandarawela@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'ella', 'slug' => 'ella-mountain-view-rest', 'name' => 'Ella Mountain View Rest', 'location' => 'Ella', 'address' => 'Passara Rd, Ella', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 500 - 1000 / Night', 'keeper' => 'Mr. Kumara', 'tel' => '057-2228111', 'email' => 'ella@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
    [
        'name' => 'Sabaragamuwa Province',
        'slug' => 'sabaragamuwa',
        'bungalows' => [
            [ 'id' => 'ratnapura', 'slug' => 'ratnapura-gem-city-bunglow', 'name' => 'Ratnapura Gem City Bungalow', 'location' => 'Ratnapura', 'address' => 'Main Rd, Ratnapura', 'capacity' => '4 Rooms (10 Guests)', 'rate' => 'LKR 450 - 900 / Night', 'keeper' => 'Mr. Gunasekera', 'tel' => '045-2222111', 'email' => 'ratnapura@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'kegalle', 'slug' => 'kegalle-circuit-rest', 'name' => 'Kegalle Circuit Rest', 'location' => 'Kegalle', 'address' => 'Colombo Rd, Kegalle', 'capacity' => '3 Rooms (8 Guests)', 'rate' => 'LKR 350 - 750 / Night', 'keeper' => 'Mr. Wickramasinghe', 'tel' => '035-2222111', 'email' => 'kegalle@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80' ],
            [ 'id' => 'balangoda', 'slug' => 'balangoda-hilltop-rest', 'name' => 'Balangoda Hilltop Rest', 'location' => 'Balangoda', 'address' => 'Pettigala Rd, Balangoda', 'capacity' => '3 Rooms (6 Guests)', 'rate' => 'LKR 400 - 800 / Night', 'keeper' => 'Mr. Liyanage', 'tel' => '045-2287111', 'email' => 'balangoda@moha.gov.lk', 'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=800&q=80' ],
        ]
    ],
];

// Normalizer
$all_bungalows = [];
foreach ( $provinces as $p ) {
    foreach ( $p['bungalows'] as $b ) {
        if (!isset($b['description'])) $b['description'] = 'Comfortable circuit bungalow managed by the Home Affairs Division for public sector officers.';
        if (!isset($b['gallery']) || empty($b['gallery'])) $b['gallery'] = [$b['image']];
        if (!isset($b['rooms']) || empty($b['rooms'])) {
            $b['rooms'] = [
                [ 'type' => 'Standard Deluxe Room (AC)', 'beds' => '1 Double Bed (Max 2 Persons)', 'rate' => $b['rate'], 'image' => $b['image'] ],
                [ 'type' => 'Officer Room (Non-AC)', 'beds' => '1 Single Bed (Max 1 Person)', 'rate' => 'LKR 800 / Night', 'image' => $b['image'] ]
            ];
        }
        if (!isset($b['nearby_places']) || empty($b['nearby_places'])) {
            $b['nearby_places'] = [
                [ 'title' => $b['name'] . ' Scenic Viewpoint', 'distance' => '1.0 km (3 mins away)', 'image' => $b['image'] ]
            ];
        }
        
        $b['province'] = $p['name'];
        $b['province_slug'] = $p['slug'];
        $all_bungalows[] = $b;
    }
}
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-10">
    
    <!-- Title Header -->
    <div class="text-center max-w-3xl mx-auto mb-8">
        <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-2">
            <?php esc_html_e( 'BUNGALOW RESERVATIONS', 'homeaffairs' ); ?>
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-dark">
            <?php esc_html_e( 'Home Affairs Circuit Bungalows', 'homeaffairs' ); ?>
        </h1>
    </div>

    <!-- Main Container Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-start">
        
        <!-- Left Side: Search Bar & Cards Grid -->
        <div class="lg:col-span-3 space-y-6">
            
            <!-- Search & Province Filter Bar -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-3.5 sm:p-4 flex flex-col sm:flex-row gap-3 items-center justify-between">
                <div class="relative w-full sm:w-72 shrink-0">
                    <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-600 text-xs pointer-events-none"></i>
                    <input type="text" id="bungalow-search" class="w-full rounded-xl border border-slate-200 bg-slate-50/50 pl-9 pr-3 py-2 text-xs text-slate-700 placeholder:text-slate-500 focus:bg-white focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all" placeholder="Search by name, location...">
                </div>

                <div class="flex items-center gap-1.5 overflow-x-auto w-full sm:w-auto pb-1.5 sm:pb-0 custom-thin-scroll">
                    <button type="button" class="province-filter active px-3 py-1.5 rounded-lg text-[11px] font-bold whitespace-nowrap transition-all bg-primary-dark text-white shadow-sm shrink-0" data-slug="all">
                        All (<?php echo count($all_bungalows); ?>)
                    </button>
                    <?php foreach ( $provinces as $p ) : ?>
                        <button type="button" class="province-filter px-3 py-1.5 rounded-lg text-[11px] font-bold whitespace-nowrap transition-all bg-slate-100 text-slate-600 hover:bg-slate-200 shrink-0" data-slug="<?php echo esc_attr( $p['slug'] ); ?>">
                            <?php echo esc_html( $p['name'] ); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 3 Columns Cards Grid Layout -->
            <div id="bungalows-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ( $all_bungalows as $b ) : 
                    // Prepare structured JS slider arrays
                    $gallery_slides = [];
                    foreach($b['gallery'] as $gimg) {
                        $gallery_slides[] = [ 'url' => $gimg, 'caption' => $b['name'] . ' Photo Gallery' ];
                    }
                    
                    $room_slides = [];
                    foreach($b['rooms'] as $rm) {
                        $room_slides[] = [ 'url' => $rm['image'], 'caption' => $rm['type'] . ' (' . $rm['rate'] . ')' ];
                    }

                    $nearby_slides = [];
                    foreach($b['nearby_places'] as $np) {
                        $nearby_slides[] = [ 'url' => $np['image'], 'caption' => $np['title'] . ' - ' . $np['distance'] ];
                    }
                ?>
                    
                    <!-- Card Box -->
                    <div class="bungalow-card group bg-white rounded-xl border border-slate-200/80 hover:border-secondary/40 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col justify-between"
                         data-name="<?php echo esc_attr( strtolower( $b['name'] ) ); ?>" 
                         data-location="<?php echo esc_attr( strtolower( $b['location'] ) ); ?>" 
                         data-slug="<?php echo esc_attr( $b['province_slug'] ); ?>"
                         id="card-<?php echo $b['id']; ?>">
                        
                        <div>
                            <div class="relative h-28 overflow-hidden bg-slate-100">
                                <img loading="lazy" decoding="async" src="<?php echo esc_url( $b['image'] ); ?>" alt="<?php echo esc_attr( $b['name'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                <span class="absolute top-2 left-2 text-[8px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-white/90 text-primary-dark shadow-sm">
                                    <?php echo esc_html( $b['province'] ); ?>
                                </span>
                                <div class="absolute bottom-2 left-2 right-2 text-white">
                                    <h3 class="text-xs font-bold text-white leading-tight truncate">
                                        <?php echo esc_html( $b['name'] ); ?>
                                    </h3>
                                    <span class="text-[9px] text-white/80 font-medium flex items-center gap-1 mt-0.5">
                                        <i class="fas fa-map-pin text-secondary text-[8px]"></i> <?php echo esc_html( $b['location'] ); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="p-2.5 space-y-1.5">
                                <div class="flex items-center justify-between text-[10px] text-slate-600 bg-slate-50 p-1.5 rounded border border-slate-100">
                                    <span class="truncate"><i class="fas fa-bed text-secondary mr-1"></i> <?php echo esc_html( $b['capacity'] ); ?></span>
                                </div>
                                <div class="text-[10px] text-slate-700 font-bold flex items-center gap-1">
                                    <i class="fas fa-tag text-secondary text-[9px]"></i> <?php echo esc_html( $b['rate'] ); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Inline Details Button -->
                        <div class="p-2.5 pt-0">
                            <button type="button" class="toggle-inline-details w-full inline-flex items-center justify-center gap-1.5 px-2.5 py-1.5 rounded-lg text-[11px] font-bold text-primary-dark bg-secondary/10 hover:bg-secondary hover:text-white transition-all duration-200 cursor-pointer shadow-sm"
                                    data-target="panel-<?php echo $b['id']; ?>">
                                <span>View Details & Book</span> <i class="fas fa-chevron-down text-[8px] transition-transform duration-300 icon-arrow"></i>
                            </button>
                        </div>
                    </div>

                    <!-- INLINE EXPANDABLE FULL-WIDTH PANEL -->
                    <div id="panel-<?php echo $b['id']; ?>" class="inline-details-panel hidden col-span-1 sm:col-span-2 lg:col-span-3 bg-white border-2 border-secondary/40 rounded-2xl p-5 sm:p-6 shadow-xl my-2 transition-all space-y-5">
                        
                        <!-- Panel Header -->
                        <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-secondary text-white">
                                    <?php echo esc_html( $b['province'] ); ?>
                                </span>
                                <h2 class="text-base sm:text-lg font-extrabold text-primary-dark mt-1"><?php echo esc_html( $b['name'] ); ?></h2>
                                <p class="text-[11px] text-slate-500 mt-0.5"><i class="fas fa-map-pin text-secondary mr-1"></i> <?php echo esc_html( $b['address'] ); ?> | <i class="fas fa-phone-alt text-secondary ml-2 mr-1"></i> <?php echo esc_html( $b['tel'] ); ?></p>
                            </div>
                            <button type="button" class="close-inline-panel text-slate-500 hover:text-red-600 font-bold text-xs bg-slate-100 hover:bg-red-50 px-3 py-1.5 rounded-lg border transition-all cursor-pointer">
                                Close Panel <i class="fas fa-times ml-1"></i>
                            </button>
                        </div>

                        <!-- Overview & Main Gallery Section -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                            <div class="space-y-2">
                                <div class="h-60 sm:h-72 rounded-xl overflow-hidden shadow-sm bg-slate-100 relative group cursor-pointer" 
                                     onclick="openSliderModal(<?php echo esc_attr(json_encode($gallery_slides)); ?>, 0)">
                                    <img loading="lazy" decoding="async" id="main-display-<?php echo $b['id']; ?>" src="<?php echo esc_url( $b['image'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                                    <span class="absolute bottom-3 right-3 text-[10px] font-bold px-2.5 py-1 rounded-lg bg-black/60 text-white backdrop-blur-sm flex items-center gap-1 opacity-90 group-hover:opacity-100">
                                        <i class="fas fa-search-plus text-secondary"></i> Click to Zoom / Slide Gallery
                                    </span>
                                </div>
                                <?php if ( count($b['gallery']) > 1 ) : ?>
                                    <div class="flex gap-2 overflow-x-auto pb-1 custom-thin-scroll">
                                        <?php foreach ( $b['gallery'] as $gindex => $img_url ) : ?>
                                            <div class="w-16 h-12 rounded-lg overflow-hidden shrink-0 cursor-pointer border border-slate-200 hover:border-secondary transition-all relative group/thumb" 
                                                 onclick="openSliderModal(<?php echo esc_attr(json_encode($gallery_slides)); ?>, <?php echo $gindex; ?>)">
                                                <img loading="lazy" decoding="async" src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover group-hover/thumb:scale-110 transition-transform">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="space-y-3 bg-slate-50 p-4 rounded-xl border border-slate-100 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-primary-dark text-xs sm:text-sm border-b pb-2 mb-2">Bungalow Overview</h3>
                                    <p class="text-slate-600 leading-relaxed text-[11px] sm:text-xs mb-3"><?php echo esc_html( $b['description'] ); ?></p>
                                    
                                    <div class="grid grid-cols-2 gap-2 text-xs">
                                        <div><span class="text-slate-600 block text-[10px]">Capacity</span><strong class="text-slate-800 text-[11px]"><?php echo esc_html( $b['capacity'] ); ?></strong></div>
                                        <div><span class="text-slate-600 block text-[10px]">Rates</span><strong class="text-secondary text-[11px]"><?php echo esc_html( $b['rate'] ); ?></strong></div>
                                        <div><span class="text-slate-600 block text-[10px]">Caretaker Officer</span><strong class="text-slate-800 text-[11px]"><?php echo esc_html( $b['keeper'] ); ?></strong></div>
                                        <div><span class="text-slate-600 block text-[10px]">Contact Email</span><strong class="text-slate-800 text-[11px]"><?php echo esc_html( $b['email'] ); ?></strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Available Rooms Section (Room Images Slide Lightbox) -->
                        <div class="space-y-2">
                            <h3 class="font-bold text-primary-dark text-xs sm:text-sm flex items-center gap-1.5 border-b border-slate-100 pb-2">
                                <i class="fas fa-bed text-secondary"></i> Available Rooms & Pricing (<?php echo count($b['rooms']); ?> Rooms - Click to Slide Images)
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                                <?php foreach ( $b['rooms'] as $rindex => $room ) : ?>
                                    <div class="bg-slate-50 rounded-xl border border-slate-200 p-2.5 space-y-2 flex flex-col justify-between shadow-sm">
                                        <div class="h-28 rounded-lg overflow-hidden bg-slate-100 cursor-pointer relative group" 
                                             onclick="openSliderModal(<?php echo esc_attr(json_encode($room_slides)); ?>, <?php echo $rindex; ?>)">
                                            <img loading="lazy" decoding="async" src="<?php echo esc_url( $room['image'] ); ?>" alt="<?php echo esc_attr( $room['type'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                            <span class="absolute bottom-1 right-1 text-[8px] bg-black/60 text-white px-1.5 py-0.5 rounded"><i class="fas fa-search-plus text-secondary"></i> Slide Rooms</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-primary-dark text-xs leading-tight"><?php echo esc_html( $room['type'] ); ?></h4>
                                            <p class="text-[10px] text-slate-500 mt-0.5"><i class="fas fa-bed text-secondary mr-1"></i> <?php echo esc_html( $room['beds'] ); ?></p>
                                        </div>
                                        <div class="pt-1.5 border-t border-slate-200 flex items-center justify-between">
                                            <span class="text-[11px] font-extrabold text-secondary"><?php echo esc_html( $room['rate'] ); ?></span>
                                            <span class="text-[9px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Available</span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Places You Can Visit Near This Bungalow -->
                        <?php if ( !empty($b['nearby_places']) ) : ?>
                            <div class="space-y-3 bg-slate-50/70 p-4 rounded-2xl border border-slate-200/80">
                                <h3 class="font-bold text-primary-dark text-xs sm:text-sm flex items-center gap-2 border-b border-slate-200 pb-2">
                                    <i class="fas fa-compass text-secondary text-sm"></i> Places You Can Visit Near This Bungalow
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
                                    <?php foreach ( $b['nearby_places'] as $npindex => $place ) : ?>
                                        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-secondary transition-all group flex flex-col justify-between">
                                            <div class="h-32 bg-slate-100 relative cursor-pointer overflow-hidden" 
                                                 onclick="openSliderModal(<?php echo esc_attr(json_encode($nearby_slides)); ?>, <?php echo $npindex; ?>)">
                                                <img loading="lazy" decoding="async" src="<?php echo esc_url( $place['image'] ); ?>" alt="<?php echo esc_attr( $place['title'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                                <span class="absolute bottom-2 left-2 text-[10px] font-bold text-white bg-secondary/90 px-2.5 py-0.5 rounded-md shadow flex items-center gap-1">
                                                    <i class="fas fa-route text-[9px]"></i> <?php echo esc_html( $place['distance'] ); ?>
                                                </span>
                                                <span class="absolute top-2 right-2 w-7 h-7 bg-black/50 hover:bg-secondary text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <i class="fas fa-search-plus text-[10px]"></i>
                                                </span>
                                            </div>
                                            <div class="p-3">
                                                <h4 class="font-bold text-primary-dark text-xs leading-snug group-hover:text-secondary transition-colors">
                                                    <?php echo esc_html( $place['title'] ); ?>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Booking Request Form -->
                        <div class="bg-gradient-to-br from-slate-900 to-primary-dark text-white rounded-2xl p-4 sm:p-5 space-y-3 shadow-lg" id="booking-form-<?php echo $b['id']; ?>">
                            <h3 class="font-bold text-xs sm:text-sm text-secondary flex items-center gap-2 border-b border-white/10 pb-2">
                                <i class="fas fa-calendar-check"></i> Submit Direct Booking Request for <?php echo esc_html( $b['name'] ); ?>
                            </h3>
                            
                            <form class="space-y-3 text-xs" onsubmit="event.preventDefault(); alert('Reservation submitted successfully for <?php echo esc_js($b['name']); ?>!');">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">Full Name (Officer)</label>
                                        <input type="text" required class="w-full rounded-lg border border-white/20 bg-white/10 p-2.5 text-xs text-white placeholder:text-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="Official Name">
                                    </div>
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">NIC Number</label>
                                        <input type="text" required class="w-full rounded-lg border border-white/20 bg-white/10 p-2.5 text-xs text-white placeholder:text-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="NIC Number">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">Check-In Date</label>
                                        <input type="date" required class="w-full rounded-lg border border-white/20 bg-white/10 p-2.5 text-xs text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                                    </div>
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">Check-Out Date</label>
                                        <input type="date" required class="w-full rounded-lg border border-white/20 bg-white/10 p-2.5 text-xs text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">Select Room Type</label>
                                        <select class="w-full rounded-lg border border-white/20 bg-slate-900 p-2.5 text-xs text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary">
                                            <?php foreach ( $b['rooms'] as $room ) : ?>
                                                <option><?php echo esc_html( $room['type'] . ' - ' . $room['rate'] ); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-slate-300 text-[10px] mb-1">Designation & Workplace</label>
                                        <input type="text" required class="w-full rounded-lg border border-white/20 bg-white/10 p-2.5 text-xs text-white placeholder:text-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus:border-secondary" placeholder="Ministry / Department">
                                    </div>
                                </div>

                                <div class="pt-2 flex items-center justify-end">
                                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-secondary text-primary-dark font-extrabold text-xs rounded-xl hover:bg-secondary-light transition-all shadow-md">
                                        Confirm & Submit Booking
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                <?php endforeach; ?>
            </div>

            <!-- Empty Search State -->
            <div id="bungalow-empty" class="hidden flex flex-col items-center justify-center py-12 bg-white rounded-2xl border border-slate-100 text-center">
                <i class="fas fa-bed text-2xl text-slate-300 mb-2"></i>
                <h3 class="text-xs font-bold text-slate-700">No circuit bungalows found matching your search.</h3>
            </div>

            <!-- Rules Card -->
            <div id="reservation-rules" class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
                <h3 class="font-bold text-primary-dark text-xs mb-2.5 flex items-center gap-2">
                    <i class="fas fa-clipboard-check text-secondary"></i> Reservation Rules & Guidelines
                </h3>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-[11px] text-slate-600 list-disc list-inside">
                    <li><strong>Eligibility:</strong> Public sector officers & pensioners only.</li>
                    <li><strong>Maximum Stay:</strong> Max 03 consecutive days.</li>
                    <li><strong>Verification:</strong> Must produce NIC and Official Service ID.</li>
                    <li><strong>Conduct:</strong> Alcohol & smoking strictly prohibited.</li>
                </ul>
            </div>

        </div>

        <!-- Right Side: Sticky Sidebar -->
        <div class="lg:sticky lg:top-6 space-y-4">
            
            <!-- Quick Summary Box -->
            <div class="bg-gradient-to-br from-[#2a0812] via-[#3d0c18] to-slate-900 text-white rounded-3xl shadow-xl p-6 relative overflow-hidden">
                <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>
                <h3 class="font-bold text-sm mb-5 flex items-center gap-2.5 text-white border-b border-white/10 pb-3">
                    <i class="fas fa-chart-pie text-secondary text-base"></i> Quick Summary
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-slate-300">Provinces Covered</span>
                        <span class="text-sm font-black text-amber-400 px-3 py-1 rounded-lg bg-white/10"><?php echo count( $provinces ); ?></span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-slate-300">Total Bungalows</span>
                        <span class="text-sm font-black text-amber-400 px-3 py-1 rounded-lg bg-white/10"><?php echo count( $all_bungalows ); ?></span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-slate-300">Max Stay Limit</span>
                        <span class="text-xs font-bold text-white bg-white/10 px-2.5 py-1 rounded-lg">3 Consecutive Days</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-slate-300">Managing Unit</span>
                        <span class="text-xs font-bold text-white">Home Affairs Div.</span>
                    </div>
                </div>
            </div>

            <!-- Online Reservation Action Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 text-center space-y-3">
                <div class="w-11 h-11 bg-amber-50 rounded-2xl flex items-center justify-center mx-auto text-amber-600 shadow-inner">
                    <i class="fas fa-calendar-alt text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-800 text-xs">Direct Online Booking</h4>
                    <p class="text-[11px] text-slate-500 mt-1 leading-snug">Select a bungalow card and submit your reservation request instantly.</p>
                </div>
                <button type="button" onclick="scrollToBungalows()" class="inline-flex items-center justify-center gap-2 w-full py-3 px-4 rounded-xl bg-[#3d0c18] hover:bg-secondary text-white hover:text-primary-dark text-xs font-extrabold transition-all cursor-pointer shadow-md">
                    <i class="fas fa-bookmark text-[11px]"></i> Book Circuit Bungalow
                </button>
            </div>

            <!-- Helpdesk Info Box -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200/80 p-4 text-xs text-slate-600 space-y-2">
                <h4 class="font-bold text-primary-dark flex items-center gap-1.5">
                    <i class="fas fa-headset text-secondary"></i> Need Assistance?
                </h4>
                <p class="text-[11px] text-slate-500 leading-relaxed">For booking inquiries and approvals, contact the Home Affairs Division.</p>
                <p class="text-[11px] font-semibold text-slate-700 pt-1 flex items-center gap-2">
                    <i class="fas fa-phone-alt text-amber-600"></i> +94 11 232 6675
                </p>
            </div>

        </div>

    </div>
</main>

<!-- Lightbox Multi-Image Slider Modal -->
<div id="image-slider-modal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-md flex flex-col justify-between p-4 sm:p-6 transition-all">
    
    <!-- Top Navigation Header -->
    <div class="flex items-center justify-between text-white z-10 w-full max-w-6xl mx-auto">
        <span id="slider-counter" class="text-xs font-bold tracking-wider bg-white/10 px-3 py-1 rounded-full border border-white/20">1 / 1</span>
        <button type="button" onclick="closeSliderModal()" class="w-9 h-9 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center transition-colors">
            <i class="fas fa-times text-sm"></i>
        </button>
    </div>

    <!-- Center Slider Image with Arrow Controls -->
    <div class="relative flex-1 flex items-center justify-center my-3 w-full max-w-6xl mx-auto">
        <!-- Previous Button -->
        <button type="button" onclick="changeSlide(-1)" class="absolute left-1 sm:left-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg cursor-pointer">
            <i class="fas fa-chevron-left text-base"></i>
        </button>

        <!-- Displayed Image -->
        <div class="max-w-5xl max-h-[75vh] overflow-hidden rounded-2xl shadow-2xl flex flex-col items-center justify-center">
            <img loading="lazy" decoding="async" id="slider-active-img" src="" class="max-h-[75vh] w-auto max-w-full object-contain rounded-2xl transition-all duration-300">
        </div>

        <!-- Next Button -->
        <button type="button" onclick="changeSlide(1)" class="absolute right-1 sm:right-4 z-20 w-11 h-11 bg-black/60 hover:bg-secondary text-white hover:text-primary-dark rounded-full flex items-center justify-center transition-all shadow-lg cursor-pointer">
            <i class="fas fa-chevron-right text-base"></i>
        </button>
    </div>

    <!-- Bottom Caption & Keyboard Notice -->
    <div class="text-center z-10 w-full max-w-6xl mx-auto">
        <p id="slider-caption" class="text-white text-xs sm:text-sm font-bold tracking-wide mb-1"></p>
        <span class="text-[10px] text-slate-600">Use arrow keys or click left/right buttons to slide.</span>
    </div>
</div>

<!-- Thin Scrollbar Custom CSS -->
<style>
.custom-thin-scroll::-webkit-scrollbar { height: 4px; width: 4px; }
.custom-thin-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
.custom-thin-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
.custom-thin-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
</style>

<!-- Toggle & Slider Script -->
<script>
var activeSlideArray = [];
var currentSlideIndex = 0;

document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('bungalow-search');
    var cards = document.querySelectorAll('.bungalow-card');
    var filterBtns = document.querySelectorAll('.province-filter');
    var emptyEl = document.getElementById('bungalow-empty');

    var currentProvince = 'all';
    var currentQuery = '';

    function filterCards() {
        var visibleCount = 0;
        cards.forEach(function(card) {
            var name = card.getAttribute('data-name') || '';
            var location = card.getAttribute('data-location') || '';
            var slug = card.getAttribute('data-slug') || '';
            
            var matchesSearch = !currentQuery || (name.indexOf(currentQuery) !== -1 || location.indexOf(currentQuery) !== -1);
            var matchesProvince = (currentProvince === 'all') || (slug === currentProvince);

            var panelId = card.querySelector('.toggle-inline-details').getAttribute('data-target');
            var panel = document.getElementById(panelId);

            if (matchesSearch && matchesProvince) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
                if (panel) panel.classList.add('hidden');
            }
        });
        if (emptyEl) emptyEl.classList.toggle('hidden', visibleCount > 0);
    }

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            currentQuery = this.value.toLowerCase().trim();
            filterCards();
        });
    }

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            filterBtns.forEach(function(b) {
                b.classList.remove('active', 'bg-primary-dark', 'text-white');
                b.classList.add('bg-slate-100', 'text-slate-600');
            });
            this.classList.add('active', 'bg-primary-dark', 'text-white');
            this.classList.remove('bg-slate-100', 'text-slate-600');
            currentProvince = this.getAttribute('data-slug') || 'all';
            filterCards();
        });
    });

    // Panel Toggle Logic
    var toggleBtns = document.querySelectorAll('.toggle-inline-details');
    var closeBtns = document.querySelectorAll('.close-inline-panel');

    toggleBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var targetId = this.getAttribute('data-target');
            var panel = document.getElementById(targetId);
            var icon = this.querySelector('.icon-arrow');

            document.querySelectorAll('.inline-details-panel').forEach(function(p) {
                if (p.id !== targetId) p.classList.add('hidden');
            });

            document.querySelectorAll('.icon-arrow').forEach(function(i) {
                if (i !== icon) i.classList.remove('rotate-180');
            });

            if (panel.classList.contains('hidden')) {
                panel.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180');
                panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                panel.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180');
            }
        });
    });

    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var panel = this.closest('.inline-details-panel');
            if (panel) panel.classList.add('hidden');
        });
    });
});

// Lightbox Slider Functions
function openSliderModal(slidesArray, initialIndex) {
    if (!slidesArray || slidesArray.length === 0) return;
    if (typeof GLightbox !== 'undefined') {
        var glElements = slidesArray.map(function(s, idx) {
            return {
                href: s.url,
                type: 'image',
                title: (s.caption || 'Bungalow Gallery') + ' (' + (idx + 1) + '/' + slidesArray.length + ')'
            };
        });
        var instance = GLightbox({
            elements: glElements,
            startAt: initialIndex || 0,
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
        instance.open();
        return;
    }
    activeSlideArray = slidesArray;
    currentSlideIndex = initialIndex || 0;
    updateSliderView();
    var modal = document.getElementById('image-slider-modal');
    if (modal) modal.classList.remove('hidden');
}

function closeSliderModal() {
    var modal = document.getElementById('image-slider-modal');
    if (modal) modal.classList.add('hidden');
}

function changeSlide(direction) {
    if (activeSlideArray.length <= 1) return;
    currentSlideIndex += direction;
    if (currentSlideIndex >= activeSlideArray.length) currentSlideIndex = 0;
    if (currentSlideIndex < 0) currentSlideIndex = activeSlideArray.length - 1;
    updateSliderView();
}

function updateSliderView() {
    var imgEl = document.getElementById('slider-active-img');
    var counterEl = document.getElementById('slider-counter');
    var captionEl = document.getElementById('slider-caption');

    var slide = activeSlideArray[currentSlideIndex];
    if (slide && imgEl) {
        imgEl.src = slide.url;
        if (counterEl) counterEl.innerText = (currentSlideIndex + 1) + ' / ' + activeSlideArray.length;
        if (captionEl) captionEl.innerText = slide.caption || '';
    }
}

// Keyboard arrow keys navigation
document.addEventListener('keydown', function(e) {
    var modal = document.getElementById('image-slider-modal');
    if (modal && !modal.classList.contains('hidden')) {
        if (e.key === 'ArrowLeft') changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
        if (e.key === 'Escape') closeSliderModal();
    }
});

function scrollToBungalows() {
    var grid = document.getElementById('bungalows-grid');
    if (grid) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
</script>

<?php get_footer(); ?>