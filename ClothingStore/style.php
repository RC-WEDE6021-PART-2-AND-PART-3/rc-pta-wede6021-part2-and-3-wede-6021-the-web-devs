<style>
body {
    font-family: Arial;
    margin: 0;
    background: #f7f3ef;
}

/* NAVBAR */
.navbar {
    background: #e6d3c1;
    padding: 15px;
    display: flex;
    justify-content: space-between;
}

.navbar a {
    text-decoration: none;
    color: #5c4a3d;
    margin: 0 15px;
    font-weight: bold;
}

/* HERO */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px;
}

.hero-text {
    width: 50%;
}

.hero-text h1 {
    font-size: 40px;
    color: #5c4a3d;
}

.hero-btn {
    background: #8b6f47;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
}

.hero-image img {
    width: 400px;
    border-radius: 12px;
}

/* PRODUCTS */
.products {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    padding: 20px;
}

.product-card {
    background: white;
    padding: 15px;
    border-radius: 10px;
    width: 220px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-card img {
    width: 100%;
}

/* BUTTON */
.btn {
    background: #8b6f47;
    color: white;
    padding: 8px 12px;
    text-decoration: none;
}

/* FOOTER */
.footer {
    background: #8b6f47;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 40px;
}
</style>