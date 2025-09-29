# First-Time Setup: Cloning the Repo into VS Code

## 1. Install the Tools
- Watch this tutorial and follow the instructions to install php https://www.youtube.com/watch?v=n04w2SzGr_U
- Install nvm https://github.com/coreybutler/nvm-windows/releases/download/1.2.2/nvm-setup.exe
- Open command prompt and run ```nvm install lts``` then follow the on-screen instructions (don't forget to run nvm use 22.20.0 or whatever number it says)
- Install composer https://getcomposer.org/Composer-Setup.exe
- Install VS Code https://code.visualstudio.com/download
- In VS Code, install extension: **GitHub Pull Requests.** Launch VS Code Quick Open (`Ctrl+P`), paste the following command, and press enter.

```
ext install GitHub.vscode-pull-request-github
```



## 2. Sign In to GitHub in VS Code

- Bottom-left corner, click **Accounts** → **Sign in with GitHub**
- A browser opens → log in → allow access
- Now VS Code is connected to GitHub



## 3. Clone the Project Repo

1. Copy the repo link: [https://github.com/akh5l/CS2-TP.git](https://github.com/akh5l/CS2-TP.git "‌")
2. In VS Code, open **Command Palette** (`Ctrl + Shift + P` / `Cmd + Shift + P`)
   - Type **Git: Clone** → paste the repo link
   - Choose a folder on your computer (e.g., `Documents/CS-Project`)
3. VS Code asks: _“Open cloned repo?”_ → Click **Yes**



## 4. Install Dependencies (Laravel project)

Open a terminal in VS Code (**View → Terminal or Ctrl+Alt+T**) and run:

```
composer install
npm install
```



## 5. Set Up Project

1. Copy the example .env file:
   ```
   copy .env.example .env

   ```
2. Generate app key:
   ```
   php artisan key:generate

   ```
3. Copy the sample database file:
   ```
   copy database/database.sqlite.example database/database.sqlite

   ```
4. Generate database migrations:
   ```
   php artisan migrate

   ```


## 6. Run the Project

Two terminals needed (**View → Terminal or Ctrl+Alt+T then Ctrl+Shift+5**):

```
# Terminal 1 → run Laravel
php artisan serve

# Terminal 2 → run Tailwind/Vite
npm run dev
```

- Now visit [**http://localhost:8000**](http://localhost:8000 "‌") in your browser.
- You can see changes made to CSS/JS update the website in real time!
