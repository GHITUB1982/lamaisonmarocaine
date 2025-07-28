<?php

// src/Enum/BlogPostStatus.php
namespace App\Enum;

enum BlogPostStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';
}