# OmaeWaMouAssigned

![Status](https://img.shields.io/badge/status-you%20are%20already%20assigned-red)
![License](https://img.shields.io/badge/license-MIT-blue)
![GitHub Notifications](https://img.shields.io/badge/notifications-∞-orange)

A cursed web application that tracks your GitHub notifications and reminds you that you're already assigned. Born from the pain of a boss who keeps assigning me endless tickets and issues.

Don't get me wrong - I love my job! This is just my way of coping with the ~~endless stream of tickets~~ exciting development opportunities while keeping my sanity intact.

## Features

- 🔔 GitHub issues tracking via GitHub REST API
- 📝 Focuses on assignment notifications to remind you of your impending doom
- 🖥️ Clean and modern UI (but with existential dread)
- 💾 Persistent notification history (because your pain should be documented)

## Tech Stack

### Backend
- **Laravel** - For handling your suffering with elegance
- **MySQL** - To persist your notification trauma
- **Inertia.js** - Bridging your frontend and backend despair

### Frontend
- **React** - Because your pain deserves reactive components
- **Tailwind CSS** - For styling your misery beautifully
- **shadcn/ui** - Beautiful UI components for your beautiful suffering
- **TypeScript** - Adding types to your pain

### API Integration
- **GitHub API** - Source of all notifications and assignments

## Prerequisites

- Laravel Herd
- Node.js (v16 or higher)
- A GitHub account (and the will to live)
- Personal Access Token from GitHub with following permissions:
  - `notifications`
  - `repo`
  - Your sanity (optional)

## Installation

1. Clone the repository of despair:
```bash
git clone https://github.com/yourusername/OmaeWaMouAssigned.git
cd OmaeWaMouAssigned
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install frontend dependencies:
```bash
npm install
```

4. Create and configure your `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

GITHUB_TOKEN=your_personal_access_token
```

5. Run database migrations:
```bash
php artisan migrate
```

6. Generate application key:
```bash
php artisan key:generate
```

## Development

1. Start Laravel Herd
2. Start the Vite development server:
```bash
npm run dev
```

## Usage

1. Access the application through Laravel Herd
2. Login with your GitHub token
3. Wait for the inevitable notifications

## Roadmap

- [ ] Issue page for better ticket management and suffering visualization
- [ ] Filter functionality for issue tags (to categorize your pain more effectively)
- [ ] Ollama integration for AI-powered ticket summarization

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/more-suffering`)
3. Commit your changes (`git commit -am 'Added more pain'`)
4. Push to the branch (`git push origin feature/more-suffering`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## FAQ

**Q: Why does this exist?**  
A: Because your notifications won't check themselves.

**Q: Will this improve my productivity?**  
A: No, but at least you'll know exactly how much work you're avoiding.

**Q: Is there a way to reduce assignment anxiety?**  
A: That's the neat part, there isn't.

## Contact

Create an issue or submit a PR. We're all in this together.

Remember: Omae Wa Mou Assigned
