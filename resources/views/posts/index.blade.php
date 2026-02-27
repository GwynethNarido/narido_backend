<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 800px;
        }

        header {
            margin-bottom: 48px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0;
            background: linear-gradient(to right, #6366f1, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .post-grid {
            display: grid;
            gap: 24px;
        }

        .post-card {
            background: var(--card-bg);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: 1px solid #f1f5f9;
        }

        .post-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .post-card h2 {
            margin: 0 0 12px 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
        }

        .post-card p {
            margin: 0;
            line-height: 1.7;
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .empty-state {
            text-align: center;
            padding: 60px;
            background: #fff;
            border-radius: 16px;
            border: 2px dashed #e2e8f0;
            color: var(--text-muted);
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1></h1>
        </header>

        <div class="post-grid">
            @forelse($posts as $post)
                <article class="post-card">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->text }}</p>
                </article>
            @empty
                <div class="empty-state">
                    <p>No posts available yet. Check back soon!</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>