const Header = () => {
  return (
    <header className="bg-card border-b border-border sticky top-0 z-50">
      <div className="container mx-auto px-4 py-3">
        <div className="flex items-center justify-center gap-4">
          <img 
            src="/lovable-uploads/khoji-logo.jfif" 
            alt="Khoji Logo" 
            className="h-12 w-12 rounded-full object-cover"
          />
          <div className="text-center">
            <h1 className="text-2xl font-bold text-gradient-saffron">Khoji</h1>
            <p className="text-sm text-muted-foreground">Find Missing Persons</p>
          </div>
        </div>
      </div>
    </header>
  );
};

export default Header;
