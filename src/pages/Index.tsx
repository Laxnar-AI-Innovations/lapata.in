import Header from "@/components/Header";
import EventBranding from "@/components/EventBranding";
import ActionButtons from "@/components/ActionButtons";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="container mx-auto px-4 py-6">
        <EventBranding />
        <ActionButtons />
      </main>
    </div>
  );
};

export default Index;
