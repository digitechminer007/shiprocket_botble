# 🚀 Shiprocket Advanced Plugin for Botble CMS

**Author:** Digitech Miner  
**Year:** 2025

---

## Overview

The **Shiprocket Advanced Plugin** enables seamless and advanced integration of the Shiprocket logistics platform with [Botble CMS](https://botble.com/). This plugin empowers your e-commerce admin panel with end-to-end shipping automation, real-time syncing, order and shipment management, wallet access, and more—directly inside Botble.

---

## Features

- **API Integration**  
  Securely connect your Shiprocket account by entering API credentials in plugin settings.

- **Order Sync**  
  - Sync Botble orders (with proper address/payment info) to Shiprocket with a click or automatically when the status is "Ready to Ship".
  - View, filter, and manage synced orders from the admin.

- **Reverse Sync**  
  - Automatically or manually update Botble order statuses based on live Shiprocket shipment statuses (delivered, in transit, etc.).

- **Shipment Management**  
  - Create, view, track, and cancel shipments.
  - Display full shipment details, logs, and tracking links.

- **Wallet & Credits**  
  - Check your Shiprocket wallet balance and view transaction history.

- **Pickup Locations**  
  - Add, edit, and manage Shiprocket pickup addresses.

- **API Tools**  
  - Quick tools to check rates, fetch courier info, test credentials, etc.

- **Dashboard & Analytics**  
  - Overview dashboard with shipment analytics, recent activity, and error logs.

- **Access Controls**  
  - Restrict access to super admins or by permission role.

- **Multi-language**  
  - English and Hindi translations provided.

- **Sidebar Navigation**  
  - A dedicated "Shiprocket" menu with submenus: Settings, Orders, Dashboard, Wallet, Pickups, API Tools, and more.

---

## Installation

1. **Copy Plugin**  
   Place the `shiprocket` plugin folder into `platform/plugins/shiprocket/`.

2. **Run Migrations** (if provided):  
   ```bash
   php artisan migrate

3. Seed Demo Data (optional):
   php artisan db:seed --class=Database\\Seeders\\ShiprocketSeeder

4. Enable Plugin
   Activate Shiprocket from the Botble CMS admin panel.

5. Configure API Credentials 
   Go to Shiprocket > Settings in the sidebar, and enter your Shiprocket API Email and Password.



#Usage:
Access all plugin features via the Shiprocket sidebar menu.
Sync orders manually, or let the plugin auto-sync "Ready to Ship" orders.
Reverse-sync status from Shiprocket using the command:
	
	php artisan shiprocket:sync-orders

Manage pickups, view your wallet, check logs, and more—all in one place.



#Troubleshooting:
Invalid Credentials:
Double-check your API email/password in Settings.

Orders Not Syncing:
Ensure orders have valid address, payment info, and correct status ("Ready to Ship" for auto-sync).

No Shipments Displayed:
Only orders already synced to Shiprocket will show shipment details.

For support:
Contact Digitech Miner.