<?php

interface DownloadableReport
{
    public function getName(): string;
 
    public function getHeaders(): array;
 
    public function getData(): array;
}

class BlogReport
{
    public function getName(): string
    {
        return 'Blog report';
    }
}


class ReportDownloadService
{
    public function downloadPDF(BlogReport $report)
    {
        $name = $report->getName();
 
        // Download the file here...
    }
}