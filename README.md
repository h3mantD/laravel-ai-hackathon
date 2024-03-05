# Installation

```bash
git clone https://github.com/h3mantD/laravel-ai-hackathon.git
```

## Usage

### Running Frontend

-   Open a new terminal and go to frontend folder
    ```bash
    cd laravel-ai-hackathon/frontend
    npm install
    ```
-   Create a .env file in the frontend folder

    ```bash
    cp frontend/.env.example frontend/.env
    ```

-   Add Backend API's URL to the VITE_API_ROOT in the frontend/.env file

-   Start the server
    ```bash
    npm run dev
    ```

### Running Backend API

#### Install Dependencies

```bash
cd laravel-ai-hackathon
composer install
```

#### Create .env file

```bash
cp .env.example .env
```

-   Add your database credentials in .env file
-   Set following api keys

    ```bash
    GROQ_API_TOKEN=
    ELEVEN_LABS_API_TOKEN=
    ELEVEN_LABS_VOICE_ID=
    ELEVEN_LABS_MODEL_ID=
    JINA_ACESS_TOKEN=
    ```

-   Setup Chroma DB and add it's configuraiton in .env
    ```bash
    CHROMA_HOST=http://localhost
    CHROMA_PORT=8080
    CHROMA_TENANT=default
    CHROMA_DATABASE=default
    CHROMA_SYNC_ENABLED=true
    CHROMA_SYNC_QUEUE=default
    CHROMA_SYNC_CONNECTION=database
    CHROMA_SYNC_TRIES=3
    ```

#### Generate Application Key

```bash
php artisan key:generate
```

#### Run Migrations

```bash
php artisan migrate
```

#### Run queue worker

```bash
php artisan queue:work
```

### Run Seeders

```bash
php artisan db:seed
```

#### Run Server

```bash
php artisan serve
```
