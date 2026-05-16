<?php
/**
 * WordPress 기본 설정 파일
 * CloudPress 자동 생성 — 직접 수정하지 마세요
 * 데이터베이스: SQLite (_db/wordpress.db — GitHub 레포 저장)
 */

// ── SQLite 데이터베이스 설정 ──────────────────────────────────────────────────
// D1(Cloudflare) 대신 GitHub 레포 내 SQLite .db 파일 사용
// db.php 드롭인(wp-content/db.php)이 SQLite 연결을 처리합니다.
define( 'DB_NAME',     '57df8079-7ce9-49ce-bc1b-5f271e2bd971_wp' );
define( 'DB_USER',     'cloudpress' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ── SQLite 플러그인 설정 ──────────────────────────────────────────────────────
// wp-content/db.php (SQLite Database Integration 드롭인)
define( 'SQLITE_DB_DIR',  ABSPATH . '_db/' );   // GitHub 레포 내 _db/ 폴더
define( 'SQLITE_DB_FILE', 'wordpress.db' );      // .db 확장자 (D1 금지)

// ── 인증 키 & 솔트 ──────────────────────────────────────────────────────────
define( 'AUTH_KEY',         'lip33eit47drjjw62f2w81fyw2dhdpffslk60citciiycpr8flsx71dneufme9ew' );
define( 'SECURE_AUTH_KEY',  'u062gv71vukbgpx4t80ezlcji21ryfxuve8yng78j41maaxywzb24roagi4wcxa3' );
define( 'LOGGED_IN_KEY',    'q36xwavr1ubweg5lsp52j5h0fgnvp2vpjsnfbrra4oy9ww2kbhfza10unh9365hn' );
define( 'NONCE_KEY',        '5gqt64xsz4s9yv5sv3kk7trooxa1bifdd0sdksrbv9fnd442tqbbhpu0ffzs2k4c' );
define( 'AUTH_SALT',        '7efz9dchdndyr35vrn7cpxtl8bfyi5jw1uh7po3m1srk0axsgvan0a1sf9qg968v' );
define( 'SECURE_AUTH_SALT', 'n5ka5b0wc5lq8niox2nur8n94ft4lsx6isczt6wz4kuvqvkq3je4obo1317qujwz' );
define( 'LOGGED_IN_SALT',   'lynvmrdl2g8rwdm0ns11yrurl89timlzvdfjbo3if0wyxdswqqtnlw8nallc5n2d' );
define( 'NONCE_SALT',       'orqehlv4m4qno8fm4odft8ji60sm9q2jjpxb141n7eb3h7ton6xhhnc5filcexam' );

// ── CloudPress 전용 설정 ─────────────────────────────────────────────────────
define( 'CP_SITE_ID', getenv('CP_SITE_ID') ?: '57df8079-7ce9-49ce-bc1b-5f271e2bd971' );
define( 'CP_GITHUB_OWNER',  getenv('CP_GITHUB_OWNER')  ?: '' );
define( 'CP_GITHUB_REPO',   getenv('CP_GITHUB_REPO')   ?: '' );
define( 'CP_GITHUB_TOKEN',  getenv('CP_GITHUB_TOKEN')  ?: '' );

// ── 테이블 접두사 ────────────────────────────────────────────────────────────
$table_prefix = 'wp_';

// ── 절대 경로 ───────────────────────────────────────────────────────────────
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ── 디버그 설정 ─────────────────────────────────────────────────────────────
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );

// ── 보안 설정 ───────────────────────────────────────────────────────────────
define( 'DISALLOW_FILE_EDIT', true );

// ── 업로드 경로 ──────────────────────────────────────────────────────────────
define( 'UPLOADS', 'wp-content/uploads' );

// ── WordPress 설정 로드 ──────────────────────────────────────────────────────
require_once ABSPATH . 'wp-settings.php';
