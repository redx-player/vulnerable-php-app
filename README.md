# Acme Store (demo)

A tiny PHP app used **only** as a test target for the JScout CVEs Farm scanner.

> ⚠️ **Intentionally vulnerable. Do not deploy this anywhere reachable.** Run it
> locally, in a throwaway VM/container, or just push it to a private repo so the
> monitor has something to analyze. It is not a real application.

## What's here

Each file contains a classic, deliberately planted bug so you can confirm the AI
analysis flags the right class and writes a usable PoC:

| File | Vulnerability class |
|---|---|
| `login.php` | SQL injection (string-built query) |
| `search.php` | Reflected XSS |
| `profile.php` | IDOR / broken access control |
| `download.php` | Path traversal / LFI |
| `ping.php` | OS command injection |
| `upload.php` | Unrestricted file upload |
| `fetch.php` | SSRF |
| `calc.php` | Remote code execution (`eval`) |
| `config.php` | Hardcoded credentials / secret |

## How to use it with CVEs Farm

1. Push this folder to a GitHub or GitLab repository of your own.
2. In the dashboard open **CVEs Farm** and add that repository.
   - On add, the monitor analyzes the **latest commit only**.
3. To test change detection + analysis, edit a file (or add a new vulnerable
   endpoint), commit, and push. The monitor picks up the new commit on its
   interval, diffs it, analyzes it, and alerts over Telegram.

### Ideas for a follow-up commit (to trigger the change path)

- Add a `comment.php` that echoes `$_GET['msg']` (stored/reflected XSS).
- Add a `report.php` that builds a query with `$_GET['order']` (SQLi).
- Change `download.php` to accept an absolute path.
