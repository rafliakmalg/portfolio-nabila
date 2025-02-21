<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public array $projects;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->projects = [
            [
                'category' => 'Machine Learning',
                'title' => 'Makan Bergizi Gratis Sentimen Analysis',
                'description' => 'Leveraged text mining and deep learning to analyze public sentiment and discussion trends on makan bergizi gratis programs.',
                'image' => 'img/makanan-bergizi-gratis.png',
                'tags' => ['Python', 'Scikir-Learn', 'Deep Learning'],
                'link' => 'https://github.com/nabilalailinajma/Sentiment-Analysis-Makan-Bergizi-Gratis_TextMining'
            ],
            [
                'category' => 'Analysis',
                'title' => 'Marketing Optimization with RFM Analysis',
                'description' => 'Leveraged Python and RFM analysis to segment customers, optimize marketing campaigns, and boost revenue.',
                'image' => 'img/marketing-oprimization-rfm-analysis.png',
                'tags' => ['Python', 'Tableau', 'RFM'],
                'link' => 'https://github.com/nabilalailinajma/Marketing-Optimization-RFM_Analysis'
            ],
            [
                'category' => 'Analysis',
                'title' => 'Airbnb Bangkok Optimization Analysis',
                'description' => 'Leveraged Python and data analysis to examine Airbnb ratings, host strategies, and pricing shifts due to COVID-19.',
                'image' => 'img/airbnb-bangkok.png',
                'tags' => ['Python', 'Tableau'],
                'link' => 'https://github.com/nabilalailinajma/Airbnb-Bangkok-COVID-Impact_Analysis'
            ],
            [
                'category' => 'Analysis',
                'title' => 'Customer Retention with Cohort Analysis',
                'description' => 'Applied Python and cohort analysis to uncover customer retention trends, identify key patterns, and explore factors influencing retention in B2B accounts receivable management.',
                'image' => 'img/customer-retention.png',
                'tags' => ['Python', 'Google Looker Studio'],
                'link' => 'https://github.com/nabilalailinajma/Customer-Retention-Cohort_Analysis'
            ],
            [
                'category' => 'App',
                'title' => 'Vehicle Rental Management System',
                'description' => 'Built a Python-based vehicle rental management system with CRUD functionality, rental tracking, tax status monitoring, and availability checks using dictionaries and PrettyTable.',
                'image' => 'img/vehicle-rental.png',
                'tags' => ['Python', 'CRUD'],
                'link' => 'https://github.com/nabilalailinajma/Vehicle-Rental-App'
            ],
            [
                'category' => 'Machine Learning',
                'title' => 'Customer Lifetime Value Prediction',
                'description' => 'Built a machine learning model to predict Customer Lifetime Value (CLV) for a vehicle insurance company to enhance customer retention and optimize marketing strategies.',
                'image' => 'img/customer-lifetime-value-prediction.png',
                'tags' => ['Python', 'Scikit-Learn', 'Random Forest', 'Supervised Learning'],
                'link' => 'https://github.com/nabilalailinajma/CLV_Prediction'
            ],
            [
                'category' => 'Machine Learning',
                'title' => 'BBCA Stock Forecasting',
                'description' => 'Leveraged time series analysis to forecast BBCA stock prices (2021-2025) and optimize investment decisions.',
                'image' => 'img/bbca-stock-forecasting.png',
                'tags' => ['Python', 'Statsmodels', 'Prohet', 'Unsupervised Learning'],
                'link' => 'https://github.com/nabilalailinajma/BBCA-Stock_Forecasting'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.project', [
            'projects' => $this->projects
        ]);
    }
}
